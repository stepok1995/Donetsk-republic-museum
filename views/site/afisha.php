<?php
namespace app\model;
use Yii;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
//use app\models\TAfishaImage;
use app\models\TAfishaMonth;
use app\models\TAfishaType;
use app\models\TAfisha;
use yii\bootstrap\Carousel;
?>

	
		<!--<tr>
		<td id="toptext"><ul itemscope itemtype="http://schema.org/Breadcrumb" class="sc_breadcrumbs"><li><a itemprop="url" href="DRKM_main.html"><span itemprop="title">Главная</span></a></li><li><span class="bc_separator">/</span><a class="bc_crumb" href="Afisha.html" itemprop="url"><span itemprop="title">Афиша</span></a></li></ul></td>
		<td> </td>
		</tr>
		<tr>-->
<div class="afishaPage">		
	<div class="sliderAfisha">
		<!--<h1>Афиша</h1>-->   
		<?php 	
		$carusel=[];
				foreach($model_month as $item_month)
				{	
						$carusel[]=				
							[
							'content' => '<img src="'.$item_month['name'].'"/>',
							'options' => []
							];
				}
		?>
		<div style="margin: 0 auto" class="row">
			<?php echo Carousel::widget([
				'items' => $carusel,
				'options' => ['class' => 'carousel slide', 'data-interval' => '12000'],
			]);
			?>
		</div>
	</div>
	<div class="contentAfisha">
		<p>
			С ценами на билеты и экскурсионное обслуживание Вы можете ознакомится в разделе 
			<a href="<?=Yii::$app->urlManager->createUrl(['site/preiskurant'])?>"><span>Прейскурант</span></a>
		</p>
	</div>	
		<?php /*
			 $form = ActiveForm::begin();
			 echo $form->field(new TAfishaType(), 'id') 
		->dropdownList( 
		TAfishaType::find()->select(['name', 'id'])
		->indexBy('id')->column()//, 
		//['prompt'=>'Выбрать интересы','id'=>'source']
		)
		->label('Что Вам было бы интересно?');
		echo Html::submitButton('Показать мои интересы', ['class'=>'btn btn-success']);
			$form=ActiveForm::end();*/
		?>
		<?php /*
		$carusel2=[];
		foreach($model_image as $item_image)
		{
			$carusel2[]=				
							[
							'content' => '<img src="'.$item_image['name'].'"/>',
							'options' => []
							];
		}*/
		?>
		<!--<div class="row">-->
			<?php /* echo Carousel::widget([
				'items' => $carusel2,
				'options' => ['class' => 'carousel slide', 'data-interval' => '12000'],
			]);*/
			?>
		<!--</div>-->

</div>