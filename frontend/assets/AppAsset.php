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
       // 'css/site.css',
        'css/bootstrap.min.css',
        'css/plugin.min.css',
        'css/font-awesome/5.11.2/css/all.min.css',
        'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap',
        'css/style.css',
        'css/responsive.css',
    ];
    public $js = [
        'js/vendor/modernizr-3.5.0.min.js',
        'js/jquery.min.js',
        'js/bootstrap.min.js',
        'js/popper.min.js',
        'js/plugin.min.js',
        'js/preloader.js',
        'js/main.js',
    ];
    public $depends = [
      //  'yii\web\YiiAsset',
       // 'yii\bootstrap\BootstrapAsset',
    ];
}
