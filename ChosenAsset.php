<?php
/**
 * @copyright Copyright (c) 2014 Roman Ovchinnikov, forked by Serge Postrash aka SDKiller <jexy.ru@gmail.com>
 * @link https://github.com/RomeroMsk
 * @version 1.0.0
 */
namespace zyx\chosen;

use yii\web\AssetBundle;

/**
 * ChosenAsset
 *
 * @author Roman Ovchinnikov <nex.software@gmail.com>
 * @link https://github.com/RomeroMsk/yii2-chosen
 * @see http://harvesthq.github.io/chosen
 */
class ChosenAsset extends AssetBundle
{
    public $sourcePath = '@vendor/zyx/yii2-chosen/assets';

    public $css = [
        'css/chosen.bootstrap.css'
    ];

    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];
}
