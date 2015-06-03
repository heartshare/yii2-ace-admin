<?php

namespace cornernote\aceadmin\web;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Configuration for Ace Admin Extra client script files
 */
class AceExtraAsset extends AssetBundle
{
    public $sourcePath = '@vendor/cornernote/yii2-ace-admin/ace/assets';
    public $js = [
        'js/ace-extra.js',
    ];

    public function init()
    {
        $this->jsOptions['position'] = View::POS_HEAD;
        parent::init();
    }
}
