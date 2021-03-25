<?php
namespace app\model;
use Yii;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\models\TAction;
use app\models\TActionImage;
use yii\bootstrap\Carousel;
use yii\bootstrap\Modal;
use kartik\date\DatePicker;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;
use app\components\FBFWidget;
?>



<!--<img style="width: 100%" src="/images/top/top2.jpg" alt="" />-->
<div class="universalPage">

<div class="titleuniversalPage">
<h2><?php echo $model['title'];?></h2>
</div>
<?php
$carusel=[];$i=0;$nol=0;
foreach($model_image as $item_image){	if($item_image['name']!= NULL){	$i=$i+1;
			$carusel[]=
					[
					'content' => '<a href="#" data-toggle="modal" data-target="#myModal"><img src="'.$item_image['name'].'"/></a>',
					'options' => []
					];}else{	$nol=$nol+1;}
}
?>
<div class="contentuniversalPage">
<img src="<?php echo $model['img_preview'];?>" />
<!--<a href="#" data-toggle="modal" data-target="#myModal">Во весь экран</a>-->


<span>
<?php echo nl2br($model['text']);?>
</span>
</div>
<div class="slideruniversalPage">
<div class="row">
    <?php 	if($i != $nol)	{	echo Carousel::widget([
        'items' => $carusel,
		'options' => ['class' => 'carousel slide', 'data-interval' => '12000'],
    ]);	}
    ?>
</div>
</div>

</div>
