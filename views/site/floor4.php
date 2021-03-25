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
use app\components\CLKWidget;

$js1 = "$(function(){
       var r = Raphael('map4', 982, 600),
  attributes = {
    fill: '#fff', //заливка
    stroke: '#3899E6', //обводка
	'opacity':  0.25, 
    'stroke-width': 1,
    'stroke-linejoin': 'round'
  },
  arr = new Array();
  for (var country in paths4) {
	  console.log(\"init4\"+paths4[country].path);
    var obj = r.path(paths4[country].path);
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
		<img src="/images/top/4etaj.jpg" alt="" />
	</div>

	<div class="titleExpoPage">
	<!--<a href="#" data-toggle="modal" data-target="#clkModal">Показать</a>-->
		<!--<h2>Экспозиция 4 этаж</h2>
	</div>

	<!--<div class="imgExpoPage">
		<div class="TablImgExpoPage">
			<div class="Img1">

				<a href="#" data-toggle="modal" data-target="#clkModal"><img src="/images/afisha/palitra.jpg" alt="" /></a>
			</div>
			<div class="Img2">
				<a href="#" data-toggle="modal" data-target="#clkModal"><img src="/images/afisha/zemlyaki.jpg" alt="" /></a>

			</div>
		</div>
	</div>	-->

	

	<!--<div class="container1">
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			<?php
			//	foreach($model as $item)
			//	{
			//	$i=$item['id'];
			//	$carusel=[];
			?>
			 <div style="width: 100% !important" class="panel panel-default">
				<div style="width: 100% !important" class="panel-heading" role="tab" id="heading<?=$i?>">
					<h5 class="panel-title">
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$i?>" aria-expanded="true" aria-controls="collapse<?=$i?>">
							<i class="more-less glyphicon glyphicon-plus"></i>
							<?php //echo $item['title'];?>
						</a>
					</h5>
				</div>
				<div style="width: 100% !important" id="collapse<?//=$i?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?//=$i?>">
					<div class="panel-body">
						<?php
							//foreach($model_image as $item_image)
						//{
						//	if($item_image['expo_id']==$item['id'])
						//	{
						//		$carusel[]=

						//			[
						//			'content' => '<img src="'.$item_image['name'].'"/>',
						//			'options' => []
						//			];
						//	}
						//}
						?>
						<div class="row">
							<?php//echo Carousel::widget([
								//'items' => $carusel,
								//'options' => ['class' => 'carousel slide', 'data-interval' => '12000'],
							//]);
							?>
						</div>

						<p><?php// echo nl2br($item['text']);?></p>
					</div>
				</div>

			</div>
			<?php
				//	}
				?>
		</div>
	</div>	-->
		

		  <!--<div class="contentexpoPage">
					<div id="map4">
</div>
			<!-- <img src="<?php// foreach($image_floor as $item_im_floor)
			//{echo $item_im_floor['name'];}?>" alt="" /> -->

						<!--<a href="<?=Yii::$app->urlManager->createUrl(['site/floor3'])?>"><img style="max-width: 7%; text-align: right;" src="/images/сюдой.png"></a>			
<h3>Переход на третий этаж</h3>
		</div>
			
</div>	-->
	<?= CLKWidget::widget(['id'=>10]) ?> -->
	
	
<div class="floorPage">
	<div class="bannerFloor">
		<img src="/images/top/4etaj.jpg" alt="" />
	</div>	
	<div class="titleFloor">
		<h2>Экспозиция 4 этаж</h2>
	</div>
	<div class="mapFloor">
		<div id="map4">								 
		</div>
	</div>
	<div class="navigationFloorLeft">
		<a href="<?=Yii::$app->urlManager->createUrl(['site/floor3'])?>"><img style="max-width: 7%; text-align: right;" src="/images/сюдой.png"></a>			
		<h3>Переход на третий этаж</h3>
	</div>
	<div class="navigationFloorRight">		
	</div>	
</div>	