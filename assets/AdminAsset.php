<?php

namespace app\assets;

use yii\web\AssetBundle;

class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'admin_assets/css/pace.min.css',
        'admin_assets/plugins/vectormap/jquery-jvectormap-2.0.2.css',
        'admin_assets/plugins/simplebar/css/simplebar.css',
        'admin_assets/css/bootstrap.min.css',
        'admin_assets/css/animate.css',
        'admin_assets/css/icons.css',
        'admin_assets/css/sidebar-menu.css',
        'admin_assets/css/app-style.css',
    ];
    public $js = [
        'admin_assets/js/pace.min.js',
        'admin_assets/js/jquery.min.js',
        'admin_assets/js/popper.min.js',
        'admin_assets/js/bootstrap.min.js',
        'admin_assets/plugins/simplebar/js/simplebar.js',
        'admin_assets/js/sidebar-menu.js',
        'admin_assets/js/jquery.loading-indicator.js',
        'admin_assets/js/app-script.js',
        'admin_assets/plugins/Chart.js/Chart.min.js',
        'admin_assets/js/index.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}