const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// Dashboard
mix.js("resources/js/app.js", "public/js")
    //.sass('resources/sass/app.scss', 'public/css');

    .styles(
        [
            "node_modules/@coreui/coreui-pro/css/style.css",
            "node_modules/@coreui/icons/css/free.min.css",
            "node_modules/@coreui/icons/css/brand.min.css",
            "node_modules/@coreui/icons/css/flag.min.css",
            "node_modules/@coreui/flag-icon-css/css/flag-icon.min.css"
        ],
        "public/css/app.css"
    )

    .scripts(
        [
            "node_modules/@coreui/coreui-pro/dist/js/coreui.bundle.min.js",
            "node_modules/@coreui/utils/dist/coreui-utils.js",
            "node_modules/@coreui/icons/js/svgxuse.min.js"
            //"node_modules/@coreui/coreui-pro/dist/js/main.js",
        ],
        "public/js/app2.js"
    )
    

    /*
    .scripts(
        [
            "node_modules/ckeditor4/ckeditor.js",
        ],
        "public/js/ckeditor.js"
    )

    .scripts(
        [
            "node_modules/ckeditor4/styles.js",
        ],
        "public/js/styles.js"
    )

    .scripts(
        [
            "node_modules/ckeditor4/lang/es.js",
        ],
        "public/js/es.js"
    )

    */
    .scripts(
        [
            "node_modules/lazyload/lazyload.js",
        ],
        "public/js/lazyload.js"
    );
    

    
    mix.copy("node_modules/@coreui/icons/fonts", "public/fonts");
    mix.copy("node_modules/@coreui/icons/svg/flag", "public/svg/flag");
    mix.copy("node_modules/@coreui/icons/sprites/", "public/icons/sprites");
    mix.copy("node_modules/@coreui/icons/svg/free/", "public/icons/svg/free");

// Front
mix.styles(
    [
        "node_modules/@coreui/coreui-pro/public/css/open-iconic-bootstrap.min.css",
        "node_modules/@coreui/coreui-pro/public/css/animate.css",
        "node_modules/@coreui/coreui-pro/public/css/owl.carousel.min.css",
        "node_modules/@coreui/coreui-pro/public/css/owl.theme.default.min.css",
        "node_modules/@coreui/coreui-pro/public/css/magnific-popup.css",
        "node_modules/@coreui/coreui-pro/public/css/aos.css",
        "node_modules/@coreui/coreui-pro/public/css/ionicons.min.css",
        "node_modules/@coreui/coreui-pro/public/css/bootstrap-datepicker.css",
        "node_modules/@coreui/coreui-pro/public/css/jquery.timepicker.css",
        "node_modules/@coreui/coreui-pro/public/css/flaticon.css",
        "node_modules/@coreui/coreui-pro/public/css/icomoon.css",
        "node_modules/@coreui/coreui-pro/public/css/style.css"
    ],
    "public/css/app_f.css"
).scripts(
    [
        "node_modules/@coreui/coreui-pro/public/js/jquery.min.js",
        "node_modules/@coreui/coreui-pro/public/js/jquery-migrate-3.0.1.min.js",
        "node_modules/@coreui/coreui-pro/public/js/popper.min.js",
        "node_modules/@coreui/coreui-pro/public/js/bootstrap.min.js",
        "node_modules/@coreui/coreui-pro/public/js/jquery.easing.1.3.js",
        "node_modules/@coreui/coreui-pro/public/js/jquery.waypoints.min.js",
        "node_modules/@coreui/coreui-pro/public/js/jquery.stellar.min.js",
        "node_modules/@coreui/coreui-pro/public/js/owl.carousel.min.js",
        "node_modules/@coreui/coreui-pro/public/js/jquery.magnific-popup.min.js",
        "node_modules/@coreui/coreui-pro/public/js/aos.js",
        "node_modules/@coreui/coreui-pro/public/js/jquery.animateNumber.min.js",
        "node_modules/@coreui/coreui-pro/public/js/bootstrap-datepicker.js",
        // "node_modules/@coreui/coreui-pro/public/js/jquery.timepicker.min.js",
        "node_modules/@coreui/coreui-pro/public/js/jquery.mb.YTPlayer.min.js",
        "node_modules/@coreui/coreui-pro/public/js/scrollax.min.js",
        "node_modules/@coreui/coreui-pro/public/js/main.js"
    ],
    "public/js/app_f.js"
);

mix.copy(
    "node_modules/@coreui/coreui-pro/public/fonts/flaticon/",
    "public/fonts/flaticon"
);
mix.copy(
    "node_modules/@coreui/coreui-pro/public/fonts/icomoon/",
    "public/fonts/icomoon"
);
mix.copy(
    "node_modules/@coreui/coreui-pro/public/fonts/ionicons/",
    "public/fonts/ionicons"
);
mix.copy(
    "node_modules/@coreui/coreui-pro/public/fonts/open-iconic/",
    "public/fonts/iconic"
);
mix.copy("node_modules/@coreui/coreui-pro/public/images/", "public/images");
