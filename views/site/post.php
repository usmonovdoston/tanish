<?php for ($i=0; $i < count($yangilik); $i++) :?>
<!-- first-card -->
<?php if($i%3==0) :?>
<div class="soc_blog yangi <?=($yangilik[$i]['tur']=='maqola')?'madal':''?>" id="card_margin">
    <a href="http://<?=$yangilik[$i]['link']?>" son='<?=$yangilik[$i]['id']?>' img="<?=$yangilik[$i]['image']?>" target="_blank" class="d-flex">
        <div class="fx-50 sm_fx_100">
            <div class="soc_img soc_img_9" style="background: url(<?=$yangilik[$i]['image']?>);background-size: 100% 100%">
                <!-- <img src="img/25.jpg" alt="" class=""> -->
                <div class="text_link">
                    <h4>
                        <?=$yangilik[$i]['site']?>
                    </h4>
                </div>
            </div>
        </div>
        <div class="soc_desc fx-50">
            <h4 class="title<?=$yangilik[$i]['id']?>">
                <?=$yangilik[$i]['title']?>
            </h4>
            <div class="kontent kontent<?=$yangilik[$i]['id']?>">
                <?=$yangilik[$i]['content']?>
            </div>
        </div>
    </a>
    <div class="soc_like">
        <i class="fa fa-eye" aria-hidden="true" son="<?=$yangilik[$i]['id']?>"></i><span class="view<?=$yangilik[$i]['id']?>"><?=$yangilik[$i]['view']?></span>
        <i class="fa fa-thumbs-o-up plyus2" aria-hidden="true" son="<?=$yangilik[$i]['id']?>"></i><span><?=$yangilik[$i]['layk']?></span>
        <i class="fa fa-thumbs-o-down minus2" aria-hidden="true" son="<?=$yangilik[$i]['id']?>"></i><span><?=$yangilik[$i]['dislayk']?></span>
    </div>
</div> <!-- end first-card -->
<?php else :?>
<!-- second-row card -->
<div class="soc_blog fx_calc-50 yangi <?=($yangilik[$i]['tur']=='maqola')?'madal':''?>">
    <a href="http://<?=$yangilik[$i]['link']?>" son='<?=$yangilik[$i]['id']?>' img="<?=$yangilik[$i]['image']?>" target="_blank" style="display: block;">
        <div class="soc_img soc_img_7" style="background: url(<?=$yangilik[$i]['image']?>);background-size: 100% 100%">
            <!-- <img src="img/2.jpg" alt="" class="img-fluid"> -->
            <div class="text_link">
                <h4>
                    <?=$yangilik[$i]['site']?>
                </h4>
            </div>
        </div>
        <div class="soc_desc">
            <h4 class="title<?=$yangilik[$i]['id']?>">
                <?=$yangilik[$i]['title']?>
            </h4>
            <div class="kontent kontent<?=$yangilik[$i]['id']?>">
                <?=$yangilik[$i]['content']?>
            </div>
        </div>
    </a>
    <div class="soc_like sd_icon">
        <i class="fa fa-eye" aria-hidden="true" son="<?=$yangilik[$i]['id']?>"></i><span class="view<?=$yangilik[$i]['id']?>"><?=$yangilik[$i]['view']?></span>
        <i class="fa fa-thumbs-o-up plyus2" aria-hidden="true" son="<?=$yangilik[$i]['id']?>"></i><span><?=$yangilik[$i]['layk']?></span>
        <i class="fa fa-thumbs-o-down minus2" aria-hidden="true" son="<?=$yangilik[$i]['id']?>"></i><span><?=$yangilik[$i]['dislayk']?></span>
    </div>
</div>
<!--end second-row card -->
<?php endif;?>
<?php endfor;?>

<?php
$url = Yii::$app->urlManager->createUrl('site/up');
$url2 = Yii::$app->urlManager->createUrl('site/down');
$url3 = Yii::$app->urlManager->createUrl('site/up2');
$url4 = Yii::$app->urlManager->createUrl('site/down2');
$view = Yii::$app->urlManager->createUrl('site/view');
$ajax = '<img id="ajax" src="img/ajax.gif" style="width:40px">';
$customScript = <<< JS
  jQuery(document).ready(function ($) {
    $(".yangi a").click(function(){
      var son = $(this).attr("son");
      var top = $(this).offset().top+200;
      var left = 1*$(this).offset().left+5;
      $.ajax({
          url: "$view",
          type: 'POST',
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          data: {page: son},
      })
      .done(function(list) {
         $("#ajax").remove();
         $("body").append('<span class="ovoz" style="border-radius:10px;position:absolute;top: '+top+'px;left: '+left+'px;padding:15px;background: lime;z-index:999999">Мақолани ўқиганингиздан ҳурсандмиз</span>');
         $(".view"+son).html(1*$(".view"+son).html()+1);
      })
      .fail(function() {
       alert("error");
      });
    });
    $(".plyus2").click(function(){
      var son = $(this).attr("son");
      var sayt;
      var ovoz;
      var count;
      var number = 0;
      var ozi = $(this);
      var top = $(this).offset().top;
      var left = 1*$(this).offset().left-100;
      if($.cookie('ovoz'+son)!="minus2"){
        if($.cookie('ovoz'+son)!="plyus2"){
          sayt = "$url";
           $.cookie('ovoz'+son,"plyus2",{
            expires: 200});
          ovoz = '<span class="ovoz" style="border-radius:10px;position:absolute;top: '+top+'px;left: '+left+'px;padding:15px;background: lime;z-index:999999">Ovozingiz qabul qilindi</span>';
          count = 1;
        }else{
          sayt = "$url2";
          $.removeCookie('ovoz'+son);
          ovoz = '<span class="ovoz" style="border-radius:10px;position:absolute;top: '+top+'px;left: '+left+'px;padding:15px;background: lime;z-index:999999">Ovozingiz o`chirildi</span>';
          count = -1;
        }
        $(this).parent().append('$ajax');
        $.ajax({
          url: sayt,
          type: 'POST',
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          data: {
            page: son,
            number: number,
            },
        })
        .done(function(list) {
           $("#ajax").remove();
           //$("body").append(ovoz);
           ozi.next().html(1*ozi.next().html()+count);
           ozi.next().next().next().html(1*ozi.next().next().next().html()+number);
        })
        .fail(function() {
         alert("error");
        });
      }else{
        if($.cookie('ovoz'+son)!="plyus2"){

          if($.cookie('ovoz'+son)=="minus2"){
            number = -1;
          }
          count = 1;
          sayt = "$url";
           $.cookie('ovoz'+son,"plyus2",{
            expires: 200});
          ovoz = '<span class="ovoz" style="border-radius:10px;position:absolute;top: '+top+'px;left: '+left+'px;padding:15px;background: lime;z-index:999999">Ovozingiz qabul qilindi</span>';
        }else{
          sayt = "$url2";
          count = -1;
          $.removeCookie('ovoz'+son);
          ovoz = '<span class="ovoz" style="border-radius:10px;position:absolute;top: '+top+'px;left: '+left+'px;padding:15px;background: lime;z-index:999999">Ovozingiz o`chirildi</span>';
        }
        $.ajax({
          url: sayt,
          type: 'POST',
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          data: {
            page: son,
            number: number,
          },
        })
        .done(function(list) {
           $("#ajax").remove();
           ozi.next().html(1*ozi.next().html()+count);
           ozi.next().next().next().html(1*ozi.next().next().next().html()+number);
        })
        .fail(function() {
         alert("error");
        });
      }
    });
    $(".minus2").click(function(){
      var son = $(this).attr("son");
      var sayt;
      var ovoz;
      var count;
      var number = 0;
      var ozi = $(this);
      var top = $(this).offset().top;
      var left = 1*$(this).offset().left-100;
      if($.cookie('ovoz'+son)!="plyus2"){
        if($.cookie('ovoz'+son)!="minus2"){
          sayt = "$url3";
           $.cookie('ovoz'+son,"minus2",{
            expires: 200});
          ovoz = '<span class="ovoz" style="border-radius:10px;position:absolute;top: '+top+'px;left: '+left+'px;padding:15px;background: lime;z-index:999999">Ovozingiz qabul qilindi</span>';
          count = 1;
        }else{
          sayt = "$url4";
          $.removeCookie('ovoz'+son);
          ovoz = '<span class="ovoz" style="border-radius:10px;position:absolute;top: '+top+'px;left: '+left+'px;padding:15px;background: lime;z-index:999999">Ovozingiz o`chirildi</span>';
          count = -1;
        }
        $(this).parent().append('$ajax');
        $.ajax({
          url: sayt,
          type: 'POST',
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          data: {
            page: son,
            number: number,
            },
        })
        .done(function(list) {
           $("#ajax").remove();
           //$("body").append(ovoz);
           ozi.next().html(1*ozi.next().html()+count);
           ozi.prev().html(1*ozi.prev().html()+number);
        })
        .fail(function() {
         alert("error");
        });
      }else{
        if($.cookie('ovoz'+son)!="minus2"){

          if($.cookie('ovoz'+son)=="plyus2"){
            number = -1;
          }
          count = 1;
          sayt = "$url3";
           $.cookie('ovoz'+son,"minus2",{
            expires: 200});
          ovoz = '<span class="ovoz" style="border-radius:10px;position:absolute;top: '+top+'px;left: '+left+'px;padding:15px;background: lime;z-index:999999">Ovozingiz qabul qilindi</span>';
        }else{
          sayt = "$url4";
          count = -1;
          $.removeCookie('ovoz'+son);
          ovoz = '<span class="ovoz" style="border-radius:10px;position:absolute;top: '+top+'px;left: '+left+'px;padding:15px;background: lime;z-index:999999">Ovozingiz o`chirildi</span>';
        }
        $.ajax({
          url: sayt,
          type: 'POST',
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          data: {
            page: son,
            number: number,
          },
        })
        .done(function(list) {
           $("#ajax").remove();
           ozi.next().html(1*ozi.next().html()+count);
           ozi.prev().html(1*ozi.prev().html()+number);
        })
        .fail(function() {
         alert("error");
        });
      }
    });
  });
JS;
$this->registerJs($customScript, \yii\web\View::POS_READY);

$customCss = <<< CSS
#modal{
  width: 800px;
  margin: 0 auto;
  max-width: 1000px;
  float: none;
}
CSS;
$this->registerCss($customCss);
$customScript = <<< JS
$(".madal>a").click(function(e){
  var son = $(this).attr("son");
  var top = $(this).offset().top;
  var left = 1*$(this).offset().left-100;
  e.preventDefault();
  $("#modal").show(1200);
  $("#modal").css({"position":"absolute","top":top,"left":"25%","z-index":"9999999999999"});
  $(".container_wrapper").css({"opacity":"0.3","background-color":"lime"}).addClass("yopiq");
  $("#title").html($(".title"+son).html());
  $("#kantent").html($(".kontent"+son).html());
  $("#image").css("background-image","url("+$(this).attr('img')+")");
});
$("#close").click(function(){
  $("#modal").hide(1000);
  $(".container_wrapper").css({"opacity":"1","background":"none"}).removeClass("yopiq");
});
// $(".yopiq").click(function(){
//   $("#modal").hide(1000);
//   $(".container_wrapper").css({"opacity":"1","background":"none"}).removeClass("yopiq");
// })
JS;
$this->registerJs($customScript, \yii\web\View::POS_READY);