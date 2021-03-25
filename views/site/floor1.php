<?php
namespace app\model;
use Yii;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\models\TExpo;
use app\models\TFloor;
use app\models\TFloorImage;
use yii\bootstrap\Carousel;

$js1 = "$(function(){
  var r = Raphael('map1', 982, 600),
  attributes = {
    fill: '#fff', //заливка
    stroke: '#3899E6', //обводка
	'opacity':  0.25, 
    'stroke-width': 1,
    'stroke-linejoin': 'round'
  },
  arr = new Array();
  for (var country in paths) {
	   console.log(\"init1\"+paths[country].path);
    var obj = r.path(paths[country].path);
    obj.attr(attributes);
    arr[obj.id] = country;
    obj.hover(function(){
      this.animate({
        fill: '#1669AD' //заливка при наведении мышой
      }, 300);
    }, function(){
      this.animate({
        fill: attributes.fill
      }, 300);
    })
	.click(function(){
		window.open('./item-expo?id='+arr[this.id]); 
    });
    $('.point').find('.close').live('click', function(){
      var t = $(this),
      parent = t.parent('.point');
      parent.fadeOut(function(){
        parent.remove();
      });
      return false;
    });
  }
 
});
  
 
 

";
$this->registerJs($js1,\yii\web\View::POS_END);
?>
<!--<html xmlns="http://www.w3.org/1999/xhtml">-->

<!--<div class="expoPage">
	<div class="bannerexpoPage">
		<img src="/images/top/top7.jpg" alt="" />
	</div>-->
<!--<div class="IMAGE"
<img src="/images/FloorImage/83cd6d48f95f31c16ac52166741add6b7d4847bf5b742f002703f.png"/>
</div>-->
				<!--
								 <img src="<?php //foreach($image_floor as $item_im_floor)
								 //{echo $item_im_floor['name'];}?>" alt="" />	-->

<!--<div class="contentexpoPage">
			 <div id="map1">								 
							 </div>		-->	
	<!--<a href="#" data-toggle="modal" data-target="#clkModal">Показать</a>-->
	

	<!--<a href="<?=Yii::$app->urlManager->createUrl(['site/floor2'])?>"><img style="max-width: 7%; text-align: right;" src="/images/тудой.png"></a>			
	<h3>Переход на второй этаж</h3>-->
<!--</div>
</div>-->
<!--</html>-->

<div class="floorPage">
	<div class="bannerFloor">
		<img src="/images/top/top7.jpg" alt="" />
	</div>	
	<div class="titleFloor">
		<h2>Экспозиция 1 этаж</h2>
	</div>
	<div class="mapFloor">
		<div id="map1">								 
		</div>
	</div>
	<div class="navigationFloorLeft">
	</div>
	<div class="navigationFloorRight">
		<a href="<?=Yii::$app->urlManager->createUrl(['site/floor2'])?>"><img style="max-width: 7%; text-align: right;" src="/images/тудой.png"></a>			
		<h3>Переход на второй этаж</h3>
	</div>	
</div>
