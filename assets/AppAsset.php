<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\base\View;
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
       // 'css/site.css',
        'css/bootstrap.css',
        'css/style.css',

        'css/font-awesome.min.css',
        'css/nav.css',
        'css/lightbox.css',

    ];
    public $js = [
        'js/jquery.min.js',
        'js/bootstrap.js',
        'js/jquery-func.js',
        'js/lightbox-plus-jquery.min.js',
        'js/easyResponsiveTabs.js',
    ];
public $jsOptions = ['position' => \yii\web\View::POS_END];


    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
