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

<div class="interviwPage">
	<!--<img style="width: 100%" src="/images/top/top2.jpg" alt="" />-->
	<div class="interviewBanner">
		<h1>Интервью</h1>
	</div>
	<div class="interviewContent">
		
			<?php
			$i=0;
				$serv_time=date_default_timezone_set('Russia/Moscow');
				$today_date=date('Y-m-d H:i:s');
			foreach($model as $item)
			{
					if($today_date>=$item['datetime'])
	{
				$i=$i+1;
			?>
			
			<?php
			if($i!=0 && $i!=1)
			{
			?><hr><?php
			}
			?>
			
		<div class="interviewContentTable">	
			<?php
			$monthes=[
			1=>'января', 2=>'февраля', 3=>'марта', 4=>'апреля', 5=>'мая', 6=>'июня',
			7=>'июля', 8=>'августа', 9=>'сентября', 10=>'октября', 11=>'ноября', 12=>'декабря',
			];
			?>
			<?php 
			$date_wordsper = strtotime($item['date']);
			$date_words = date('j ', $date_wordsper).$monthes[date('n', $date_wordsper)].date('  Y', $date_wordsper);
			?>

			
			
			<div class="Img">
				<?php
						$model_image=TActionImage::find()
								->where(['action_id'=>$item['id']])
						->one();
				?>				
			
				<a href="<?php echo Url::to(['site/item-actions', 'id' =>$item['id']]); ?>">
					<img src="<?= $item['img_preview'];?>">
				</a>
			</div>
			<div class="Title">
				<a href="<?php echo Url::to(['site/item-actions', 'id' =>$item['id']]); ?>">
					<h2><?php echo $item['title'];?></h2>
				</a>
			</div>
			<div class="interviewContentDate">
				<a href="<?php echo Url::to(['site/item-actions', 'id' =>$item['id']]); ?>">
					<h2><?php echo $date_words;?></h2>
				</a>
			</div>
			<div class="interviewContentTableText">
				<a href="<?php echo Url::to(['site/item-actions', 'id' =>$item['id']]); ?>">
					<?php 
					echo nl2br($item['text_preview'])?>
				</a>
			</div>			
		</div>		
		
			<?php
	}
			}
			?>
			<?= LinkPager::widget(['pagination'=>$pagination])?>
		
	</div>
</div>
