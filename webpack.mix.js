let mix = require('laravel-mix');
let build = require('./tasks/build.js');
let replacements =  {
    ALGOLIA_APP_ID: JSON.stringify(process.env.ALGOLIA_APP_ID),
    ALGOLIA_ADMIN_API_KEY: JSON.stringify(process.env.ALGOLIA_ADMIN_API_KEY),
    ALGOLIA_SEARCH_API_KEY: JSON.stringify(process.env.ALGOLIA_SEARCH_API_KEY),
    ALGOLIA_INDEX_NAME: JSON.stringify((process.env.NODE_ENV == 'production') ? 'prod_NEWS' : 'dev_NEWS')
};

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');
mix.webpackConfig(webpack => {
    return {
        plugins: [
            new webpack.DefinePlugin(replacements),
            build.jigsaw,
            build.browserSync(),
            build.watch(['source/**/*.md', 'source/**/*.php', 'source/**/*.scss', '!source/**/_tmp/*'])
        ],
        node: {
            fs: "empty"
        }
    };
});

mix.autoload({
    jquery: ['$', 'window.jQuery']
});

mix.js('source/_assets/js/main.js', 'js')
   .js('source/_assets/js/search.js', 'js')
   .sass('source/_assets/sass/main.scss', 'css')
   .copyDirectory('source/_assets/fonts', 'source/assets/build/fonts')
   .options({processCssUrls: false})
   .version();
