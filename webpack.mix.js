const mix = require('laravel-mix');

mix.sass('resources/css/app.scss', 'public/css/bootstrap.css')
mix.sass('resources/css/icons.scss', 'public/css/icons.css')

mix.styles([
    'resources/css/home/home.css',
    'resources/css/home/formsteps.css',
    'resources/css/home/sale.css',
    'resources/css/home/navbar.css',
    'resources/css/home/footer.css',
    'resources/css/home/bootstrap-tagsinput.css',
    'public/fonts/vendor/font-awesome-4.7.0/css/font-awesome.css',
    'public/fonts/vendor/font-awesome-4.7.0/css/font-awesome.min.css',
    
],'public/css/app.css').version();

mix.styles([
    'resources/css/components/card.css',
],'public/css/card.css').version();

mix.styles([
    'resources/css/login/main.css',
    'resources/css/login/util.css',
    'resources/css/login/select2/select2.css',
    'resources/css/login/select2/select2.min.css',
    'resources/css/login/css-hamburgers/hamburgers.css',
    'resources/css/login/css-hamburgers/hamburgers.min.css',
    'resources/css/login/animate/animate.css',
    'public/fonts/vendor/font-awesome-4.7.0/css/font-awesome.css',
    'public/fonts/vendor/font-awesome-4.7.0/css/font-awesome.min.css',
    ],'public/css/login.css').version();

mix.scripts('node_modules/jquery/dist/jquery.js','public/js/jquery.js');
mix.scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js','public/js/bootstrap.js');

mix.scripts([
    'resources/js/home/salesteps.js',
    'resources/js/home/rentsteps.js',
    'resources/js/home/main.js',
    'node_modules/jquery/dist/jquery.js',
    'resources/js/home/bootstrap-tagsinput.js',
    
],'public/js/app.js').version()

mix.scripts('resources/js/scripts.js','public/js/buscacidades.js').version();

mix.scripts([
    'node_modules/jquery/dist/jquery.js',
    'resources/js/login/jquery/jquery-3.2.1.min.js',
    'resources/js/login/tilt/tilt.jquery.min.js',
    'resources/js/login/select2/select2.js',
    'resources/js/login/select2/select2.min.js',
    'resources/js/login/tilt/tilt.jquery.min.js',
],'public/js/login.js').version()

mix.browserSync('127.0.0.1:8000');