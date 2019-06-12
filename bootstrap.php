<?php

use Illuminate\Container\Container;
use Mni\FrontYAML\Markdown\MarkdownParser;
use App\Listeners\NewsIndexer;

/**
 * Bind a new Markdown Parser implementation to add site-specific styles.
 */
$container->bind(MarkdownParser::class, function (Container $container) {

    return new class() extends ParsedownExtra implements MarkdownParser
    {
        /**
         * Adds Bootstrap classes to tables.
         *
         * @param mixed $Line
         * @param array $Block
         * @return mixed
         */
        function blockTable($Line, array $Block = null)
        {
            $Block = parent::blockTable($Line, $Block);

            if (is_array($Block) && isset($Block['element'])) {
                $Block['element']['attributes'] = [
                    'class' => 'table table-bordered table-sm'
                ];

                if (isset($Block['element'][0]) && $Block['element'][0]['name'] === 'thead') {
                    $Block['element'][0]['attributes'] = [
                        'class' => 'thead-light'
                    ];
                }
            }

            return $Block;
        }
    };
});

/**
 * Index news items using Algolia
 */
$events->afterBuild(NewsIndexer::class);