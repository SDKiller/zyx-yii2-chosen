<?php
/**
 * @author    Serge Postrash aka SDKiller <jexy.ru@gmail.com>
 * @link      https://github.com/SDKiller/yii2-chosen
 * @package   zyx\yii2-chosen
 * @copyright Copyright (c) 2014 Serge Postrash
 * @license   BSD 3-Clause, see LICENSE.md
 */

namespace zyx\chosen;

use yii\web\AssetBundle;


class ChosenJsAsset extends AssetBundle
{
    public $sourcePath = '@vendor/harvesthq/chosen';

    public $js = [
        'chosen.jquery.min.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        if (YII_DEBUG) {
            $this->js[0] = 'chosen.jquery.js';
        }
    }

}
