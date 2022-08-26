const mix = require('laravel-mix');

mix.sass('resources/css/app.scss', 'public/css/bootstrap.css')

mix.styles([
    'resources/css/home/formsteps.css',
    'resources/css/home/main.css',
    'resources/css/home/sale.css',
],'public/css/app.css').version();

mix.scripts('node_modules/jquery/dist/jquery.js','public/js/jquery.js');
mix.scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js','public/js/bootstrap.js');

mix.scripts([
    'resources/js/home/salesteps.js',
    'resources/js/home/rentsteps.js'
],'public/js/app.js').version()