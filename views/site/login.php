<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Saytga kirish';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="main-wrapper pb-0 mb-0">
    <div class="timeline-wrapper">
        <div class="timeline-header">
            <div class="container-fluid p-0">
                <div class="row no-gutters align-items-center">
                    <div class="col-lg-6">
                        <div class="timeline-logo-area d-flex align-items-center">
                            <div class="timeline-logo">
                                <a href="index.html">
                                    <img src="/dist/images/logo/logo.png" alt="timeline logo">
                                </a>
                            </div>
                            <div class="timeline-tagline">
                                <h6 class="tagline">It’s helps you to connect and share with the people in your life</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                    </div>
                </div>
            </div>
        </div>
        <div class="timeline-page-wrapper">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="timeline-bg-content bg-img" data-bg="/dist/images/timeline/adda-timeline.jpg">
                            <h3 class="timeline-bg-title">Let’s see what’s happening to you and your world. Welcome in Adda.</h3>
                        </div>
                    </div>
                    <div id="loginDiv" class="col-lg-6 order-1 order-lg-2 d-flex align-items-center justify-content-center">
                        <div class="signup-form-wrapper">
                            <h1 class="create-acc text-center"><?php echo Yii::t('app','Login to Account')?></h1>
                            <div class="signup-inner text-center">
                                <h3 class="title">Wellcome to Adda</h3>
                                <?php $form = ActiveForm::begin([
                                    'id' => 'login-form',
                                    'layout' => 'horizontal',
                                    'options' => [
                                        'class' => 'signup-inner--form',
                                    ],
                                    'fieldConfig' => [
                                        'template' => "{input}\n<div>{error}</div>",
                                        'labelOptions' => [
                                            'class' => 'col-lg-1 col-lg-offset-3 control-label'
                                        ],
                                    ],
                                ]); ?>
                                    <div class="row">
                                        <div class="col-12">
                                            <?= $form->field($model, 'username')->textInput(['autofocus' => true,'class'=>'single-field','placeholder'=>Yii::t('app', 'Username')]) ?>
                                        </div>
                                        <div class="col-md-12">
                                            <?= $form->field($model, 'password')->passwordInput(['class'=>'single-field','placeholder'=>Yii::t('app', 'Password')]) ?>
                                        </div>
                                        <div class="col-md-12">
                                            <?= $form->field($model, 'rememberMe')->checkbox([
                                                'template' => "<div class='row'><div class=\"col-3 text-right\">{input}</div><div class=\"col-6\"> {label}</div></div>\n<div class=\"col-12\">{error}</div>",'class'=>'single-field',
                                            ]) ?>
                                        </div>
                                        <div class="col-12">
                                            <button class="submit-btn"><?php echo Yii::t('app','Login')?></button>
                                        </div>
                                    </div>
                                    <h6 class="terms-condition">I have read & accepted the <a href="#">terms of use</a></h6>
                                <?php ActiveForm::end(); ?>
                                <div class="signup-inner text-center">
                                    <?=Html::a('<h3 class="title">'.Yii::t('app', 'Create Account').'</h3>','#',['id'=>'signUpButton'])?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="display:none!important;" id="signUpDiv" class="col-lg-6 order-1 order-lg-2 d-flex align-items-center justify-content-center">
                        <div class="signup-form-wrapper">
                            <h1 class="create-acc text-center" style="padding-bottom: 5px;">Create An Account</h1>
                            <div class="signup-inner text-center">
                                <h3 class="title">Wellcome to Adda</h3>
                                <?php $form = ActiveForm::begin([
                                    'id' => 'sign-form',
                                    'layout' => 'horizontal',
                                    'options' => [
                                        'class' => 'signup-inner--form',
                                    ],
                                    'fieldConfig' => [
                                        'template' => "{input}\n<div>{error}</div>",
                                        'labelOptions' => [
                                            'class' => 'col-lg-1 col-lg-offset-3 control-label'
                                        ],
                                    ],
                                ]); ?>
                                    <div class="row">
                                        <div class="col-12">
                                            <?= $form->field($users, 'username')->textInput(['class'=>'single-field','placeholder'=>Yii::t('app', 'Username Or Email')]) ?>
                                        </div>
                                        <div class="col-6">
                                            <?= $form->field($users, 'password')->passwordInput(['class'=>'single-field','placeholder'=>Yii::t('app', 'Password')]) ?>
                                        </div>
                                        <div class="col-6">
                                            <?= $form->field($users, 'confirm_password')->passwordInput(['class'=>'single-field','placeholder'=>Yii::t('app', 'Password')]) ?>
                                        </div>
                                        <div class="col-md-6">
                                            <?= $form->field($user_info, 'name')->textInput(['class'=>'single-field','placeholder'=>Yii::t('app', 'First Name')]) ?>
                                        </div>
                                        <div class="col-md-6">
                                            <?= $form->field($user_info, 'lastname')->textInput(['class'=>'single-field','placeholder'=>Yii::t('app', 'Last Name')]) ?>
                                        </div>
                                        <div class="col-md-6">
                                            <?= $form->field($user_info, 'gender')->dropDownList([1=>Yii::t('app', 'Male'),2=>Yii::t('app', 'Female')],['class'=>'nice-select-list nice-select','prompt'=>Yii::t('app', 'Gender')]) ?>
                                        </div>
                                        <div class="col-md-6">
                                            <?= $form->field($user_info, 'birthday')->textInput(['class'=>'single-field nice-select birthday']) ?>
                                        </div>
                                        <div class="col-12">
                                            <?= $form->field($user_info, 'country_id')->dropDownList(\app\models\Country::getList(),['class'=>'select3','prompt'=>Yii::t('app', 'Country')]) ?>
                                        </div>
                                        <div class="col-12">
                                            <button class="submit-btn">Create Account</button>
                                        </div>
                                    </div>
                                    <h6 class="terms-condition">I have read & accepted the <a href="#">terms of use</a></h6>
                                    <?php ActiveForm::end(); ?>
                                    <div class="signup-inner text-center">
                                        <?=Html::a('<h3 class="title">'.Yii::t('app', 'Login').'</h3>','#',['id'=>'loginButton'])?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->registerCssFile('dist/datepicker/css/datepicker.css', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile('dist/datepicker/js/bootstrap-datepicker.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile('dist/select/select3.min.js', ['depends' => \app\assets\AppAsset::className()]);
$this->registerCssFile('/dist/select/select3.min.css');
$js = <<< JS
    $('body').delegate('#signUpButton', 'click', function(e){
        e.preventDefault();
        $('#loginDiv').attr('style','display:none!important');
        $('#signUpDiv').removeAttr('style');
    });
    $('body').delegate('#loginButton', 'click', function(e){
        e.preventDefault();
        $('#signUpDiv').attr('style','display:none!important');
        $('#loginDiv').removeAttr('style');
    });
    $('.birthday').datepicker({
        format : 'dd.mm.yyyy'
    });
JS;
$this->registerJs($js,\yii\web\View::POS_READY);