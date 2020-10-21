<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users */

?>
<div class="users-update">
 <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'login')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parol')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ism')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'familiya')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->fileInput(['required'=>false])->label("Rasm") ?>
    <input type="hidden" name="rasm" value="<?=$model->image?>">
    <?= $form->field($model, 'jins')->dropDownList([ 'Erkak' => 'Erkak', 'Ayol' => 'Ayol', ], ['prompt' => '']) ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Киритиш' : 'Ўзгартириш', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
