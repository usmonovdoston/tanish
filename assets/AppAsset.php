<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900',
        'dist/css/vendor/bootstrap.min.css',
        'dist/css/vendor/bicon.min.css',
        'dist/css/vendor/flaticon.css',
        'dist/css/plugins/plyr.css',
        'dist/css/plugins/slick.min.css',
        'dist/css/plugins/nice-select.css',
        'dist/css/plugins/perfect-scrollbar.css',
        'dist/css/plugins/lightgallery.min.css',
        'dist/css/style.css'
    ];
    public $js = [
        'dist/js/vendor/modernizr-3.6.0.min.js',
//        'dist/js/vendor/jquery-3.3.1.min.js',
        'dist/js/vendor/popper.min.js',
        'dist/js/vendor/bootstrap.min.js',
        'dist/js/plugins/slick.min.js',
        'dist/js/plugins/nice-select.min.js',
        'dist/js/plugins/plyr.min.js',
        'dist/js/plugins/perfect-scrollbar.min.js',
        'dist/js/plugins/lightgallery-all.min.js',
        'dist/js/plugins/imagesloaded.pkgd.min.js',
        'dist/js/plugins/isotope.pkgd.min.js',
        'dist/js/main.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
