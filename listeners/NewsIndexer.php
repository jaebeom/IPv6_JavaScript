<?php

namespace App\Listeners;

use TightenCo\Jigsaw\Jigsaw;
use TightenCo\Jigsaw\Parsers\FrontMatterParser;
use TightenCo\Jigsaw\Collection\CollectionPaginator;
use TightenCo\Jigsaw\File\InputFile;
use Symfony\Component\Finder\SplFileInfo;
use Algolia\AlgoliaSearch\SearchClient;
use Carbon\Carbon;

class NewsIndexer
{
    const COLLECTION_NAME = 'news';

    /**
     * @var Jigsaw
     */
    private $jigsaw;

    /**
     * @var string
     */
    private $sourcePath;

    /**
     * @var FrontMatterParser
     */
    private $frontMatterParser;

    /**
     * @var CollectionPaginator
     */
    private $paginator;

    public function handle(Jigsaw $jigsaw)
    {
        $this->jigsaw = $jigsaw;
        $this->sourcePath = $jigsaw->getSourcePath();
        $this->frontMatterParser = $jigsaw->app->get(FrontMatterParser::class);
        $this->paginator = $jigsaw->app->get(CollectionPaginator::class);

        $items = $this->getItems();
        $this->index($items);
    }

    public function getItems()
    {
        // read the news page's frontmatter to dynamically determine the
        // number of items per page. This is needed to know which page
        // a news item is on to determine it's URL
        $fileName = self::COLLECTION_NAME . '.blade.php';
        $fileContents = $this->jigsaw->readSourceFile($fileName);
        $meta = $this->frontMatterParser->getFrontMatter($fileContents);
        $file = new InputFile(
            new SplFileInfo($this->sourcePath . '/' . $fileName, '', $fileName)
        );
        $perPage = $meta['pagination']['perPage'];
        $items = $this->jigsaw->getCollection(self::COLLECTION_NAME);

        // returns a "chunked" collection
        $paginated = $this->paginator->paginate($file, $items, $perPage);
        $flattened = collect([]);

        foreach ($paginated as $page) {
            foreach ($page['items'] as $key => $item) {
                $postDate = Carbon::createFromTimestamp($item->post_date)
                    ->format('Y-m-d');
                $flattened->push([
                    'title' => $item->title,
                    'path' => $page['current'] . '#' . $key,
                    'date' => $postDate,
                    'content' => (string) $item
                ]);
            }
        }

        return $flattened;
    }

    public function index($items)
    {
        $appId = $this->jigsaw->getConfig('algolia.app_id');
        $apiKey = $this->jigsaw->getConfig('algolia.admin_api_key');
        $indexName = $this->jigsaw->getConfig('algolia.index');
        $client = SearchClient::create($appId, $apiKey);
        $index = $client->initIndex($indexName);
        $index->saveObjects($items, ['autoGenerateObjectIDIfNotExist' => true]);
    }
}