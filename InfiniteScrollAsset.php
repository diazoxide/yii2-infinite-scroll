<?php
/**
 * @link https://github.com/nirvana-msu/yii2-infinite-scroll
 * @copyright Copyright (c) 2014 Alexander Stepanov
 * @license MIT
 */

namespace diazoxide\infinitescroll;

use Yii;
use yii\web\AssetBundle;


class InfiniteScrollAsset extends AssetBundle
{
    public $sourcePath = '@bower/infinite-scroll';
    public $css = [
    ];
    public $js = [
        '/dist/infinite-scroll.pkgd.min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];


}
