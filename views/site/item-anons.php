<?php
namespace app\model;
use Yii;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\models\TAction;
use app\models\TActionImage;
use yii\bootstrap\Carousel;
?>


<div class="centerdata">
<img src="/images/top/top2.jpg" alt="" />
<table>
<tr>
<td></td><td /></tr>
<tr>
<td>
<!--<h2><?php //echo $model['date'];?></h2>-->
<h2><?php echo $model['title'];?></h2>
<?php
$carusel=[];$i=0;$nol=0;
foreach($model_image as $item_image){	if($item_image['name']!= NULL){	$i=$i+1;
			$carusel[]=
					[
					'content' => '<img src="'.$item_image['name'].'"/>',
					'options' => []
					];}else{	$nol=$nol+1;}
}
?>
<div class="row">
    <?php 	if($i != $nol)	{	echo Carousel::widget([
        'items' => $carusel,
		'options' => ['class' => 'carousel slide', 'data-interval' => '12000'],
    ]);	}
    ?>
</div>
<p>
<?php echo nl2br($model['text']);?>
</p>
</td><td></td></tr>



</table>
</div>
