const mix = require("laravel-mix");
var LiveReloadPlugin = require("webpack-livereload-plugin");

mix.webpackConfig({
    plugins: [new LiveReloadPlugin()],
});

mix
    .setPublicPath("dist")
    .setResourceRoot("/wp-content/plugins/tf-nrw-2023/dist/")
    .js("src/js/app.js", "dist")
    .minify("dist/app.js", "dist/app.min.js")
    .sass("src/css/style.scss", "dist")
    .minify("dist/style.css");
