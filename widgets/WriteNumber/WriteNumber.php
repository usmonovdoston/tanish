<?php
/**
 * Copyright (c) 2019.
 * Created by Doston Usmonov
 */
namespace app\widgets\WriteNumber;
use Yii;
use yii\base\Widget;
use yii\bootstrap\Modal;

class WriteNumber extends Widget {

    public $headerText = '<h4>Write number</h4>';
    public $buttonModalText = 'OK';
    public $buttonOKText = 'OK';
    public $buttonCancelText = 'Отмена';
    public $errorHeader = 'Ошибка!';
    public $targetInputID = 'targetInput';
    public $targetShowID = 'showInput';
    public $buttonClass = 'btnButtonModal';
    public $modal_id = 'writeNumberModal';
    public $toFixed = 0;
    public $isModal = true;
    public function init() {
        $view = $this->getView();
        $view->registerCss('
        #calc{
			width: 80%;
			background: green;
			border-radius: 10px;
			padding: 25px;
			margin: 20px auto;
			box-shadow: inset 12px 0 1px green,inset 0 10px 1px green, inset -12px 0 1px green, inset 0 -10px 1px green;
			text-align: center;
		}
		#ekran{
			background: ivory;
			color: maroon;
			height: 80px;
			text-align: right;
			padding-right: 10px;
			font-size: 54px;
			border:none;
			margin-bottom: 20px;
			display: flex;
            flex-direction: column;
            justify-content: center;
		}
		#input{
			background: ivory;
			padding: 5px;
			border: 5px solid maroon;
			border-radius: 10px;
			/*box-shadow: 5px -5px 1px lime,-5px -5px 1px lime, 5px 5px 1px lime, -5px 5px 1px lime;*/
		}
		#raqam td{
		    vertical-align: middle !important;
		}
		#raqam td span{
			margin: 5px;
			font-size: 45px;
			height: 60px;
			text-align: center;
			font-weight: bold;
			display: flex;
			align-content: center;
            align-items: center;
            justify-content: center;
			cursor: pointer;
			
			border-radius: 3px;
            -webkit-box-shadow: none;
            box-shadow: none;
            border: 1px solid transparent;
            background-color: #f4f4f4;
            color: #444;
            border-color: #ddd;
            padding: 5px 10px;
            vertical-align: middle !important;
		}
		#raqam .deleteNumber{
			background: red;
			color: ivory;
		}
		.modal-lg{
		    width: 900px
        }
');
        $view->registerJsVar('toFixed', $this->toFixed);
        $script = <<<JS
            var inputWrite;
            $("body").delegate(".{$this->targetInputID}","focus",function(e){
                e.preventDefault();
                inputWrite = $(this);
                $("#ekran").text('')
                $(this).blur();
                $("#{$this->modal_id}").modal("show");
            });
            $('body').delegate('.writeNumber','click',function(e){
                let t = $(this);
                let res = $("#ekran").text()+t.attr("num");
                if(res=='.'||res==NaN){
                    if(res=='.'||res=='0..'){
                        res = '0.';
                    }else {
                        res = '';
                    }
                }else {
                    if(/^(\d+)[.]+(\d*)$/.test(res)||res=='0..'){
                        res = res.replace(/[^.\d]+/g,"").replace( /^([^\.]*\.)|\./g, '$1' );
                    }else {
                        res = parseFloat(res);
                    }
                }
                if(inputWrite){
                    if(inputWrite.attr('min')&&res<inputWrite.attr('min')){
                        $("#ekran").text()-t.attr("num");
                        alert('Sorry, the minimum value was reached');
                    }else if (inputWrite.attr('max')&&res>inputWrite.attr('max')) {
                        $("#ekran").text()-t.attr("num");
                        alert('Sorry, the maximum value was reached');
                    }else{
                        $("#ekran").text(res);
                        inputWrite.val(res);
                    }
                }else{
                    $("#ekran").text('Select input');
                }
            });
            $("body").delegate("#{$this->modal_id}",'keydown',function(e) {
                let t = $(this);
                let res = $("#ekran").text();
                if (/^\s*[-+]?[0-9]*\.?[0-9]+([eE][-+]?[0-9]+)?\s*$/.test(e.key) || e.which == 190 || e.which == 110) {
                    res = $("#ekran").text()+e.key;
                    if(!/^(\d+)[.]?(\d*)$/.test(res)&&res!=''){
                        if(res=='.'||res==NaN){
                            if(res=='.'||res=='0..'){
                                res = '0.';
                            }else {
                                res = '';
                            }
                        }else {
                            if(/^(\d+)[.]+(\d*)$/.test(res)||res=='0..'){
                                res = res.replace(/[^.\d]+/g,"").replace( /^([^\.]*\.)|\./g, '$1' );
                            }else {
                                res = parseFloat(res);
                            }
                        }
                    }
                }else{
                    e.preventDefault();
                }
                if(e.which == 8 || e.which == 46){
                    e.preventDefault();
                    res = res.replace(/(\s+)?.$/, '');
                }
                if(res<0){
                    res = 0;
                }
                if(inputWrite){
                    if(inputWrite.attr('min')&&res<inputWrite.attr('min')){
                        $("#ekran").text()-t.attr("num");
                        alert('Sorry, the minimum value was reached');
                    }else if (inputWrite.attr('max')&&res>inputWrite.attr('max')) {
                        $("#ekran").text()-t.attr("num");
                        alert('Sorry, the maximum value was reached');
                    }else{
                        $("#ekran").text(res);
                        inputWrite.val(res);
                    }
                }else{
                    $("#ekran").text('Select input');
                }
            });
            if(toFixed != 0){
                $('#{$this->modal_id}').on('hidden.bs.modal', function (e) {
                    let res = 1*$("#ekran").text();
                    inputWrite.val(res.toFixed(toFixed));
                })
            }
            $('body').delegate('.deleteNumber','click',function(e){
                let res = $("#ekran").text().replace(/(\s+)?.$/, '');
                $("#ekran").text(res);
                inputWrite.val(res);
            });
JS;
        $view->registerJs($script);
    }
    public function run() {
        $html = <<<HTML
    <div id="calc">
        <div id="inputEkran">
            <div contenteditable="true" name="ekran" id="ekran"></div>
        </div>
		<div id="raqam">
		    <table class='table table-stripped'>
                <tr>
                    <td> <span class="writeNumber" type="yetti" num='7'>7</span></td>
                    <td> <span class="writeNumber" type="sakkiz" num='8'>8</span></td>
                    <td> <span class="writeNumber" type="tuqqiz" num='9'>9</span></td>
                </tr>
                <tr>
                    <td> <span class="writeNumber" type="turt" num='4'>4</span></td>
                    <td> <span class="writeNumber" type="besh" num='5'>5</span></td>
                    <td> <span class="writeNumber" type="olti" num='6'>6</span></td>
                </tr>
		        <tr>
                    <td> <span class="writeNumber" type="bir" num='1'>1</span></td>
                    <td> <span class="writeNumber" type="ikki" num='2'>2</span></td>
                    <td> <span class="writeNumber" type="uch" num='3'>3</span></td>
                </tr>
                <tr>
                    <td> <span class="writeNumber" type="nuqta" num='.'>.</span></td>
                    <td> <span class="writeNumber" type="nol" num='0'>0</span></td>
                    <td> <span class="deleteNumber" type="c"> C </span></td>
                </tr>
            </table>
		</div>
	</div>
HTML;
        $footer = <<<FOOTER
        <div class="">
            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal" aria-hidden="true" style="font-size: 40px;font-weight: bold;">Ok</button>
        </div>
FOOTER;
        if($this->isModal) {
            Modal::begin([
                /*'toggleButton' => ['label' => $this->buttonModalText, 'id' => 'yii2-snap-shoot-show', 'class' => 'btn btn-primary '.$this->buttonClass],*/
                'size' => 'modal-md',
                'id' => $this->modal_id,
                'options' => [
                    'style' => 'z-index:99999',
                ],
                'footer' => $footer,
            ]);
            echo $html;
            Modal::end();
        }else{
            echo $html;
        }
    }

}
