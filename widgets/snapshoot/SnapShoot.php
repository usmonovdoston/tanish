<?php

/**
 * @link https://github.com/doston92
 * @copyright Copyright (c) 2019 Doston Usmonov
 * @license MIT
 */

namespace app\widgets\snapshoot;

use yii\base\Widget;
use yii\bootstrap\Modal;
use Yii;

/**
 * @author Doston Usmonov <doston1533@gmail.com@gmail.com>
 */
class SnapShoot extends Widget {

    /**
     * Текст заголовка диалогового окна виджета (с тегами).
     */
    public $headerText = '<h4>WEB камера</h4>';

    /**
     * Текст заголовка окна видео (с тегами).
     */
    public $videoText = 'Видео';

    /**
     * Текст заголовка окна фото (с тегами).
     */
    public $photoText = 'Фото';

    /**
     * Текст кнопки вызова диалогового окна.
     */
    public $buttonModalText = 'Сделать снимок WEB камерой';

    /**
     * Текст кнопки захвата фото.
     */
    public $buttonCaptureText = 'Сделать снимок';

    /**
     * Текст кнопки ОК.
     */
    public $buttonOKText = 'OK';

    /**
     * Текст кнопки Отмена.
     */
    public $buttonCancelText = 'Отмена';

    /**
     * Текст заголовка сообщения об ошибке - недоступности камеры.
     */
    public $errorHeader = 'Ошибка!';

    /**
     * Текст сообщения об ошибке - недоступности камеры.
     */
    public $errorText = 'Камера недоступна или что-то пошло не так...';

    /**
     * ID атрибута - цели, для закгрузки в него фотографии (поле тег - input).
     */
    public $targetInputID = 'textImage';

    /**
     * ID атрибута - цели, для закгрузки в него фотографии (картинка тег - img).
     */
    public $targetImgID = 'rasmSnapshot';

    /**
     * Ширина видео и фото в пикселях.
     */
    public $width = 380;

    /**
     * Высота видео и фото в пикселях (рассчитывается автоматически).
     */
    private $height;

    /*
     * Заставка для фото
     */
    private $imgPhoto;

    /*
     * Класс кнопка вызова модал
     */
    public $buttonClass = 'btnButtonModal';

    public $modal_id = 'snapSHotModal';

    public function init() {
        $view = $this->getView();
        $bundle = SnapShootAsset::register($view);

        $this->imgPhoto = $bundle->baseUrl . '/images/web-camera.png';

        //Рассчет и присвоение высоты фото
        $this->height = $this->width / 4 * 3;
$view->registerCss('
.radio input {
	position: absolute;
	z-index: -1;
	opacity: 0;
	margin: 10px 0 0 7px;
}
.radio__text {
	position: relative;
	padding: 0 0 0 35px;
	cursor: pointer;
}
.radio__text:before {
	content: \'\';
	position: absolute;
	top: -2px;
	left: 0.7px;
	width: 22px;
	height: 22px;
	border: 1px solid #CDD1DA;
	border-radius: 50%;
	background: #FFF;
}
.radio__text:after {
	content: \'\';
	position: absolute;
	top: 1px;
	left: 4px;
	width: 16px;
	height: 16px;
	border-radius: 50%;
	background: #9FD468;
	box-shadow: inset 0 1px 1px rgba(0,0,0,.5);
	opacity: 0;
	transition: .2s;
}
.radio input:checked + .radio__text:after {
	opacity: 1;
}
.radio input:focus + .radio__text:before {
	box-shadow: 0 0 0 3px rgba(255,255,0,.7);
}
.upload-label{
    background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQyIDQyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0MiA0MjsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIzMnB4IiBoZWlnaHQ9IjMycHgiPgo8cGF0aCBzdHlsZT0iZmlsbDojMjNBMjREOyIgZD0iTTM3LjA1OSwxNkgyNlY0Ljk0MUMyNiwyLjIyNCwyMy43MTgsMCwyMSwwcy01LDIuMjI0LTUsNC45NDFWMTZINC45NDFDMi4yMjQsMTYsMCwxOC4yODIsMCwyMSAgczIuMjI0LDUsNC45NDEsNUgxNnYxMS4wNTlDMTYsMzkuNzc2LDE4LjI4Miw0MiwyMSw0MnM1LTIuMjI0LDUtNC45NDFWMjZoMTEuMDU5QzM5Ljc3NiwyNiw0MiwyMy43MTgsNDIsMjFTMzkuNzc2LDE2LDM3LjA1OSwxNnoiLz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==);
     background-size: 100% 100%;
     width: 200px;
     height: 200px;
     border: 1px solid;
     /*border-radius: 25px;*/
     margin-right: 5px;
     cursor: pointer;
     position: relative;
}
.upload-label:hover{
     background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQyIDQyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0MiA0MjsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIzMnB4IiBoZWlnaHQ9IjMycHgiPgo8cGF0aCBzdHlsZT0iZmlsbDojMjNBMjREOyIgZD0iTTM3LjA1OSwxNkgyNlY0Ljk0MUMyNiwyLjIyNCwyMy43MTgsMCwyMSwwcy01LDIuMjI0LTUsNC45NDFWMTZINC45NDFDMi4yMjQsMTYsMCwxOC4yODIsMCwyMSAgczIuMjI0LDUsNC45NDEsNUgxNnYxMS4wNTlDMTYsMzkuNzc2LDE4LjI4Miw0MiwyMSw0MnM1LTIuMjI0LDUtNC45NDFWMjZoMTEuMDU5QzM5Ljc3NiwyNiw0MiwyMy43MTgsNDIsMjFTMzkuNzc2LDE2LDM3LjA1OSwxNnoiLz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==);
     background-size: 100px 100px;
     background-repeat: no-repeat;
     background-position: center;
}
label.upload-label .udalit{
     position: absolute!important;
     right: 0px!important;
     top: -20px;
     width: 40px!important;
     font-size: 11px!important;
     z-index: 9;
}
.upload-image{
     opacity: 0;
}
.upload-container .form-group{
     float: left;
     padding: 10px;
}
.modal-lg {
    width: 900px;
}
');
        $view->registerJsVar('modalId',$this->modal_id);
$script = <<<JS
$("body").delegate("#yii2-snap-shoot-ok",'click', function () {
    if ($("#{$this->targetInputID}").length > 0) {
        //Сохранение фото в текстовом формате, для передачи на сервер
        $("#{$this->targetInputID}").val($("#yii2-snap-shoot-photo").attr('src'));
    }
    if ($("#{$this->targetImgID}").length > 0) {
        //Заполнение картинки
        $("#{$this->targetImgID}").attr('src', $("#yii2-snap-shoot-photo").attr('src'));
    }
    $('#{$this->modal_id}').addClass('hidden');
});
$("body").delegate("input.upload-image", "change", function(){
    let ext = this.value.split('.').pop();
    if(ext=='jpeg'||ext=='jpg'||ext=='gif'||ext=='bmp'||ext=='png'){
        var a = $(this).parent();
        var b = a.parent();
        if (this.files[0]) {
                var fr = new FileReader();
    
            fr.addEventListener("load", function () {
                a.css("background-image","url(" + fr.result + ")");
                $('#textImage').val(fr.result);
            }, false);
            fr.readAsDataURL(this.files[0]);
        }
    }else{
        alert('Siz rasm tanlamadingiz');
    }
});
$('body').delegate('.radio__text','click',function(){
    var t = $(this).prev();
    if(t.val()=='camera'){
        $('#fileImage').prop('disabled','disabled');
        $('.labelUpload').addClass('hidden');
        $('#textImage').removeAttr('disabled');
        $('#{$this->modal_id}').removeClass('hidden');
        $('#{$this->targetImgID}').removeClass('hidden');
        $.fn.snapshootCapture();
    }else{
        $('#fileImage').removeAttr('disabled');
        $('.labelUpload').removeClass('hidden');
        $('#{$this->modal_id}').addClass('hidden');
        $('#{$this->targetImgID}').addClass('hidden');
    }
});
JS;
        $view->registerJs($script);
    }

    /**
     * Выполнение виджета.
     */
    public function run() {
    $imageUpload = Yii::t('app','Rasm yuklash');
    $fromFile = Yii::t('app','Fayllardan olish');
    $fromCamera = Yii::t('app','Kameradan olish');
        //Блок диалогового окна
        $html = <<<HTML
        <h3>{$imageUpload}</h3>
    <label class="radio">
        <input type="radio" name="img-type" value="files" />
        <div class="radio__text">{$fromFile}</div>
    </label>
    <label class="radio">
        <input type="radio" name="img-type" value="camera"/>
        <div class="radio__text" id="yii2-snap-shoot-show">{$fromCamera}</div>
    </label>
    <img src="" alt="" class="img-thumbnail hidden rasm" id="rasmSnapshot">
    <label class="upload-label labelUpload hidden">
        <input type="file" class="upload-image" id="fileImage" disabled>
    </label>
    <input type="hidden" id="textImage" name="imageSnapshot" disabled>
    <div class="hidden" id='{$this->modal_id}'>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div id="yii2-snap-shoot-error" class="alert alert-danger" style="display: none">
                    <strong>{$this->errorHeader}</strong> {$this->errorText}
                </div>
            </div>
        </div>
        <div class="row">
            <div  class="col-md-6 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><span class="glyphicon glyphicon-facetime-video"></span> {$this->videoText}</div>
                    <div class="panel-body ">
                        <video class="img-rounded center-block" id="yii2-snap-shoot-video" width="{$this->width}" height="$this->height" autoplay></video>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><span class="glyphicon glyphicon-picture"> </span> {$this->photoText}</div>
                    <div class="panel-body">
                        <canvas  id="yii2-snap-shoot-canvas" width="{$this->width}" height="{$this->height}" style="display: none"></canvas>
                        <img class="img-rounded center-block" src="{$this->imgPhoto}"  id="yii2-snap-shoot-photo">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                    <button type="button" id="yii2-snap-shoot-capture" class="btn btn-warning btn-block">{$this->buttonCaptureText}</button>
            </div>
        </div>
        <div style="padding:10px">
            <button id = "yii2-snap-shoot-ok" type = "button" class = "btn btn-primary">{$this->buttonOKText}</button>
            <button id = "yii2-snap-shoot-cancel" type = "button" class = "btn btn-default">{$this->buttonCancelText}</button >
        </div>
    </div>
HTML;
        //Подвал диалогового окна (кнопки)
//        $footer = <<<FOOTER
//
//FOOTER;

        //Вызов модального окна
//        Modal::begin([
//            'header' => $this->headerText,
//            'toggleButton' => ['label' => $this->buttonModalText, 'id' => 'yii2-snap-shoot-show', 'class' => 'btn btn-primary '.$this->buttonClass],
//            'size' => 'modal-lg',
//            'id' => $this->modal_id,
//            'footer' => $footer,
//        ]);
        echo $html;
//        Modal::end();
    }

}
