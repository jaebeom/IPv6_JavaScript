import algoliasearch from 'algoliasearch/lite';
import instantsearch from 'instantsearch.js';
import { searchBox, hits } from 'instantsearch.js/es/widgets';

const searchClient = algoliasearch(ALGOLIA_APP_ID, ALGOLIA_SEARCH_API_KEY);
const search = instantsearch({
  indexName: ALGOLIA_INDEX_NAME,
  searchClient,
});

search.addWidget(
  searchBox({
    container: "#searchbox"
  })
);

search.addWidget(
  hits({
    container: "#hits"
  })
);

search.start();