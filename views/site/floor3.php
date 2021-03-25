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
       var r = Raphael('map3', 982, 600),
  attributes = {
    fill: '#fff', //заливка
    stroke: '#3899E6', //обводка
	'opacity':  0.25, 
    'stroke-width': 1,
    'stroke-linejoin': 'round'
  },
  arr = new Array();
  for (var country in paths3) {
	  console.log(\"init3\"+paths3[country].path);
    var obj = r.path(paths3[country].path);
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
  });";
$this->registerJs($js1,\yii\web\View::POS_END);
?>

<!--<div class="expoPage">
<div class="bannerexpoPage">
<img src="/images/top/3etaj.jpg" alt="" />
</div>


<div class="contentexpoPage">
<h2>Экспозиция 3 этаж</h2>
<div id="map3">
</div>

<a href="<?=Yii::$app->urlManager->createUrl(['site/floor2'])?>"><img style="max-width: 7%; text-align: right;" src="/images/сюдой.png"></a>			
<h3>Переход на второй этаж</h3>
<a href="<?=Yii::$app->urlManager->createUrl(['site/floor4'])?>"><img style="max-width: 7%; text-align: right;" src="/images/тудой.png"></a>			
<h3>Переход на четвёртый этаж</h3>
</div>
</div> -->


<div class="floorPage">
	<div class="bannerFloor">
		<img src="/images/top/3etaj.jpg" alt="" />
	</div>	
	<div class="titleFloor">
		<h2>Экспозиция 3 этаж</h2>
	</div>
	<div class="mapFloor">
		<div id="map3">								 
		</div>
	</div>
	<div class="navigationFloorLeft">
		<a href="<?=Yii::$app->urlManager->createUrl(['site/floor2'])?>"><img style="max-width: 7%; text-align: right;" src="/images/сюдой.png"></a>			
		<h3>Переход на второй этаж</h3>
	</div>
	<div class="navigationFloorRight">
		<a href="<?=Yii::$app->urlManager->createUrl(['site/floor4'])?>"><img style="max-width: 7%; text-align: right;" src="/images/тудой.png"></a>			
		<h3>Переход на четвёртый этаж</h3>
	</div>	
</div>
