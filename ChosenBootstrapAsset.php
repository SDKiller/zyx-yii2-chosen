<?php
/**
 * @copyright Copyright (c) 2014 Roman Ovchinnikov, forked by Serge Postrash aka SDKiller <jexy.ru@gmail.com>
 * @link https://github.com/RomeroMsk
 * @version 1.1.0
 */

namespace zyx\chosen;

use yii\web\AssetBundle;

/**
 * ChosenAsset
 *
 * @author Roman Ovchinnikov <nex.software@gmail.com>
 * @link https://github.com/RomeroMsk/yii2-chosen
 * @see http://harvesthq.github.io/chosen
 * @see https://github.com/dbtek/chosen-bootstrap
 */
class ChosenBootstrapAsset extends AssetBundle
{
    public $sourcePath = '@bower/chosen-bootstrap';

    public $css = [
        'chosen.bootstrap.min.css'
    ];

    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];
}
