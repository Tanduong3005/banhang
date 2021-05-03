<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        /* Favicon */
        'images/favicon.ico',

        /* CSS
        ============================================ */

        /* Bootstrap CSS */
        'css/vendor/bootstrap.min.css',
        /* Fontawesome */
        'css/vendor/font-awesome.min.css',
        /* Fontawesome Star */
        'css/vendor/fontawesome-stars.min.css',
        /* Ion Icon */
        'css/vendor/ion-fonts.css',
        /* Slick CSS */
        'css/plugins/slick.css',
        /* Animation */
        'css/plugins/animate.css',
        /* jQuery Ui */
        'css/plugins/jquery-ui.min.css',
        /* Nice Select */
        'css/plugins/nice-select.css',
        /* Timecircles */
        'css/plugins/timecircles.css',

        /* Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from the above) */
        /*
        'js/vendor/vendor.min.js',</script>
        'js/plugins/plugins.min.js',</script>
        */
        'css/style.css',
        /* Main Style CSS (Please use minify version for better website load performance) */
        /*css/style.min.css',*/
    ];
    public $js = [
        #jQuery JS
        'js/vendor/jquery-1.12.4.min.js',
        #Modernizer JS
        'js/vendor/modernizr-2.8.3.min.js',
        #Popper JS
        'js/vendor/popper.min.js',
        #Bootstrap JS
        'js/vendor/bootstrap.min.js',

        #Slick Slider JS
        'js/plugins/slick.min.js',
        #Barrating JS
        'js/plugins/jquery.barrating.min.js',
        #Counterup JS
        'js/plugins/jquery.counterup.js',
        #Nice Select JS
        'js/plugins/jquery.nice-select.js',
        #Sticky Sidebar JS
        'js/plugins/jquery.sticky-sidebar.js',
        #Jquery-ui JS
        'js/plugins/jquery-ui.min.js',
        'js/plugins/jquery.ui.touch-punch.min.js',
        #Theia Sticky Sidebar JS
        'js/plugins/theia-sticky-sidebar.min.js',
        #Waypoints JS
        'js/plugins/waypoints.min.js',
        #jQuery Zoom JS
        'js/plugins/jquery.zoom.min.js',
        #Timecircles JS
        'js/plugins/timecircles.js',
        'common/js/common.js',
        'js/main.js'

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
