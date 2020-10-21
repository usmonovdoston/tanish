<?php

/**
 * @link https://github.com/doston92
 * @copyright Copyright (c) 2019 Doston Usmonov
 * @license MIT
 */

namespace app\widgets\snapshoot;

use yii\web\AssetBundle;

/**
 * @author Doston Usmonov <doston1533@gmail.com@gmail.com>
 */
class SnapShootAsset extends AssetBundle {

    public $sourcePath = '@app/widgets/snapshoot/assets';
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    public function init() {
        parent::init();
        $this->js[] = YII_DEBUG ? 'js/snapShoot.js' : 'js/snapShoot.min.js';
    }

}
