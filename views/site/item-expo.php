<?php
 
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use app\models\TExpoImage;
use app\models\TExpo;
 use yii\bootstrap\Carousel;
?>

 
<!-- Modal -->
<div class="universalPage">
<div class="titleuniversalPage">
<h2>
<?php echo $model['title'];?>
</h2>
</div>
<?php
	$carusel=[];
?>

<?php
			foreach($model_image as $item_image)
		{
			if($item_image['expo_id']==$model['id'])
			{
				$carusel[]=

					[
					'content' => '<img src="'.$item_image['name'].'"/>',
					'options' => []
					];
			}
		}
		?>
		<div class="slideruniversalPage">
<div class="row">
    <?php echo Carousel::widget([
        'items' => $carusel,
		'options' => ['class' => 'carousel slide', 'data-interval' => '12000'],
    ]);
    ?>
</div>



					<p><?php echo nl2br($model['text']);?></p>
					</div>
  <!--______________________-->
</div>