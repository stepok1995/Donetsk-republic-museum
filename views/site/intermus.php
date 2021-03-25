<?php
namespace app\model;
use Yii;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use app\models\TAction;
use app\models\TActionImage;
use yii\bootstrap\Carousel;
use yii\widgets\LinkPager;
use kartik\date\DatePicker;
use yii\helpers\Url;
?>

<div class="weekendPage">
	<div class="weekendBanner">
		<h1>Интермузей</h1>
	</div>
	<div class="weekendContent">
		<div>		
			<p><i>Международный фестиваль «Интермузей» ежегодно проходит в столице Российской Федерации и ведёт свою историю с 1999 года. Ежегодно фестиваль объединяет в своем пространстве несколько сотен музеев из России, стран ближнего и дальнего зарубежья, являясь площадкой для многовекторного обмена опытом и возможностью для музеев показать свои достижения широкой общественности. Фестиваль проводится Министерством культуры Российской Федерации на высоком представительском уровне.<br/>
					Начиная с 2016 г., участие в фестивале «Интермузей» ежегодно принимает Донецкий республиканский краеведческий музей. Так, на фестивале в мае 2016 г. ДРКМ представил проект «Из руин возрождённые». В 2017 г. Донецкий краеведческий музей участвовал в фестивале с презентацией «Археологическая реконструкция в музейной экспозиции». А на юбилейном ХХ Международном фестивале «Интермузей» делегация ДРКМ представила многочисленным гостям и участникам передвижную выставку «Обязаны помнить!» в рамках культурно-просветительного проекта «Музей на колёсах».</i></p>

		</div>
			<h2 style="text-align: center; font-size: 200%; font-weight: bold;">Новости по теме:</h2>	<hr />
		<!--		<h2 style="text-align: center; font-size: 200%; font-weight: bold;">Новости по теме:</h2>
		<hr />-->
		<?php
			$i=0;
			foreach($model as $item)
			{
				$i=$i+1;
		?>
		
		<?php
			if($i!=0 && $i!=1)
			{
			?><hr><?php
			}
		?>
		
		<div class="weekendContentTable">
			<?php 
			$monthes=[
						1=>'января', 2=>'февраля', 3=>'марта', 4=>'апреля', 5=>'мая', 6=>'июня',
						7=>'июля', 8=>'августа', 9=>'сентября', 10=>'октября', 11=>'ноября', 12=>'декабря',
					];
				$date_wordsper = strtotime($item['date']);
				$date_words = date('j ', $date_wordsper).$monthes[date('n', $date_wordsper)].date('  Y', $date_wordsper);
			?>
			
			
			<div class="ContentImg">
				<?php
					$model_image=TActionImage::find()
							->where(['action_id'=>$item['id']])
					->one();
				?>		
				<a href="<?php echo Url::to(['site/item-actions', 'id' =>$item['id']]); ?>">				
					<img src="<?= $item['img_preview'];?>">							
				</a>
			</div>
			<div class="ContentTitle">
				<a href="<?php echo Url::to(['site/item-actions', 'id' =>$item['id']]); ?>">
					<div>
						<h2><?php echo $item['title'];?></h2>
					</div>
				</a>
			</div>
			<div class="ContentDate">
				
					<div class="dateNews">
						<span><?php echo $date_words;?></span>
					</div>
							
			</div>
			<!--<div class="ContentText">
				<div>-->
					<?php 
					//echo nl2br($item['text_preview'])?>
			<!--	</div>
			</div>-->
			
		</div>	
	
		<?php
		}
		?>
		<?= LinkPager::widget(['pagination'=>$pagination])?>
	</div>
</div>