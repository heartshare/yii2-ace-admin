<?php

namespace cornernote\aceadmin\web;

use yii\web\AssetBundle;

/**
 * Configuration for Ace Admin client script files
 */
class AceAsset extends AssetBundle
{
    public $sourcePath = '@vendor/cornernote/yii2-ace-admin/ace/assets';
    public $css = [
        'css/ace-fonts.css',
        'css/ace.css',
        'css/yii.css',
    ];
    public $js = [
        'js/ace.js',
        'js/yii.js',
    ];
    public $depends = [
        'cornernote\aceadmin\web\AceExtraAsset',
        'rmrevin\yii\fontawesome\AssetBundle',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
