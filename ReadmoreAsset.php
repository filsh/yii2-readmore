<?php

namespace filsh\yii2\readmore;

class ReadmoreAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/readmore.js';
    
    public $js = [
        'readmore.js',
    ];
}