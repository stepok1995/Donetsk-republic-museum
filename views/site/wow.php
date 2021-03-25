<?php
namespace app\model;
use Yii;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\Carousel;
?>

										
<div class="WoWPage">

						<div class="WoWBaner">
						<img style="width: 100%" src="/images/Filial/VOV.jpg" alt="" />
						</div>
<div class="WoWTitle">		




<h1> Донецкий военно-исторический музей Великой Отечественной войны</h1>
	</div>	
<?php 

	$carusel=[];
foreach($model as $item)
{
	if($item['name']!=NULL)
	{
	$carusel[]=

					[
					'content' => '<img src="'.$item['name'].'"/>',
					'options' => []
	];
	}
}
?>
<div class="WoWSlider">
<?php
echo Carousel::widget([
        'items' => $carusel,
		'options' => ['class' => 'carousel slide', 'data-interval' => '12000'],
    ]);
?>

</div>					
<div class="WoWText">
<?php
foreach($model as $item_text){
	echo nl2br($item_text['text']);
}
?>
<a href="https://vk.com/musvovdnr"><strong>Группа ВКонтакте: </strong><img style="max-width: 3%; margin: 0 auto;" src="/images/vk_wow.png"/></a>


</div>

</div>
												