<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 8/1/18
 * Time: 1:59 PM
 */

namespace entero\scrollreveal;

use yii\web\AssetBundle;

class ScrollrevealToAsset extends AssetBundle
{
    public $sourcePath = '@bower/scrollreveal/dist/';
    public $js = [
        'scrollreveal.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}