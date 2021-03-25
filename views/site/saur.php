<?php
namespace app\model;
use Yii;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\Carousel;
?>

<div class="SaurPage">
						<div class="SaurBaner">
						<img style="width: 100%" src="/images/Filial/SAUR.jpg" alt="" />
						</div>
						
	<div class="SaurTitle">					

<h1>Мемориальный комплекс "Саур-Могила"</h1>
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
<div class="SaurSlider">
<?php
echo Carousel::widget([
        'items' => $carusel,
		'options' => ['class' => 'carousel slide', 'data-interval' => '12000'],
    ]);
?>
</div>

 <div class="SaurText">		
<?php
foreach($model as $item_text){
	echo nl2br($item_text['text']);
}
?>
</div>
</div>
