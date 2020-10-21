<?php
namespace app\widgets\helpers;

use Yii;
use yii\web\View;

class Script extends \yii\base\Widget
{
    public $position = View::POS_READY;


    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        ob_start();
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        $script = ob_get_clean();
        $script = preg_replace('|^\s*<script>|ui', '', $script);
        $script = preg_replace('|</script>\s*$|ui', '', $script);
        $this->getView()->registerJs($script, $this->position);
    }
}