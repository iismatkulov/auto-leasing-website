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
        'css/bootstrap.min.css',
        'css/animate.min.css',
        'css/bootstrap-submenu.css',
        'css/bootstrap-select.min.css',
        'css/magnific-popup.css',
        'fonts/font-awesome/css/font-awesome.min.css',
        'fonts/flaticon/font/flaticon.css',
        'fonts/linearicons/style.css',
        'css/jquery.mCustomScrollbar.css',
        'css/dropzone.css',
        'css/slick.css',
        'css/lightbox.min.css',
        'css/jnoty.css',
        'css/style.css',
        'css/skins/yellow.css',
        'css/lightgallery.css',
        'css/ie10-viewport-bug-workaround.css',
        'https://fonts.googleapis.com/css?family=Poppins:300,400,600,700%7CUbuntu:300,400,700',
        'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&amp;display=swap',


    ];
    public $js = [
        'js/jquery-2.2.0.min.js',
        'js/popper.min.js',
        'js/bootstrap.min.js',
        'js/bootstrap-submenu.js',
        'js/rangeslider.js',
        'js/jquery.mb.YTPlayer.js',
        'js/bootstrap-select.min.js',
        'js/jquery.easing.1.3.js',
        'js/jquery.scrollUp.js',
        'js/jquery.mCustomScrollbar.concat.min.js',
        'js/dropzone.js',
        'js/slick.min.js',
        'js/jquery.filterizr.js',
        'js/jquery.magnific-popup.min.js',
        'js/jquery.countdown.js',
        'js/jquery.mousewheel.min.js',
        'js/lightgallery-all.js',
        'js/jnoty.js',
        'js/app.js',
        'js/ie10-viewport-bug-workaround.js',
        'js/ie10-viewport-bug-workaround.js',
        'js/ie8-responsive-file-warning.js',
        'js/ie-emulation-modes-warning.js',
        'js/html5shiv.min.js',
        'js/respond.min.js',
        'js/daterange-picker.js',
        'js/lightgallery.js',

        '',


    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
