<?php
/**
 * @author      Serge Postrash aka SDKiller <admin@yiisoft.ru>
 * @link        http://yiisoft.ru
 * @copyright   Copyright (c) 2016 YiiSoft.ru
 * @license     http://yiisoft.ru/licenses/commercial
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
class ChosenCssAsset extends AssetBundle
{
    public $sourcePath = '@bower/chosen';

    public $css = [
        'chosen.min.css'
    ];
}
