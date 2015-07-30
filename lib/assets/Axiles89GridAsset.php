<?php


namespace axiles89\viewgrid\assets;

use yii\web\AssetBundle;



class Axiles89GridAsset extends AssetBundle
{
    public $sourcePath = '@vendor/axiles89/yii2-viewgrid/lib';

    /**
     * Установили опцию принудительного обновления asset при перезагрузке
     * @var array
     */
    public $publishOptions = [
        'forceCopy' => YII_DEBUG
    ];

    public $css = [
        'css/axiles89grid.css',
    ];

    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];
}