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
<div class="newsPagemain">
<div class="banner">
<!--<img src="/images/top/top2.jpg" alt="" />-->
</div>
<div class="picker">

</div>
<?php
$i=0;
$monthes=[
1=>'января', 2=>'февраля', 3=>'марта', 4=>'апреля', 5=>'мая', 6=>'июня',
7=>'июля', 8=>'августа', 9=>'сентября', 10=>'октября', 11=>'ноября', 12=>'декабря',
];
?>
<div class="content">
			
<?php
	$serv_time=date_default_timezone_set('Russia/Moscow');
				$today_date=date('Y-m-d H:i:s');
				//echo $serv_time;
				//echo $today_date;

 foreach($model as $item)
{
if($item['class_id']!=3 and $item['class_id']!=1 /*and $item['class_id']!=5*/)
{
	$i=$i+1;
	if($today_date>=$item['datetime'])
	{
	
?>

<?php/*
if($i!=0 && $i!=1)
{*/
?><!--<hr />--><?php
//}
?>

<?php 
$date_wordsper = strtotime($item['date']);
$date_words = date('j ', $date_wordsper).$monthes[date('n', $date_wordsper)].date('  Y', $date_wordsper);
?>

<?php
		$model_image=TActionImage::find()
				->where(['action_id'=>$item['id']])
		->one();
?>

<div class="newsPage">
<?php 

											$text='description';
											if($item['class_id']==3 /*or $item['class_id']==6 or $item['class_id']==10*/)
											{
												$text='textnotpreview';
											}
?>
<div class="photo">
	<a href="<?php echo Url::to(['site/item-actions', 'id' =>$item['id']]); ?>">
				
						<img src="<?= $item['img_preview'];?>">
				
	</a>
</div>
<div class="title">
	<a href="<?php echo Url::to(['site/item-actions', 'id' =>$item['id']]); ?>">
		
				<h2><strong><?php echo $item['title'];?></strong></h2>
		
	</a>
</div>
	<?php if($date_words!=null){ ?>
					<div class="dateNews">	

						<span><?php echo $date_words;?></span>
						
					</div>	
	<?php } ?>			
<div class="<?php echo $text?>">			
				<?php 
				echo nl2br($item['text_preview'])?>
</div>			
</div>
<hr />

<?php
}
}
}
?>
</div>
<?php
if($i==0)
{
?> <h2> Интересующий Вас день прошёл без новостей.</h2><?php
}
?>
<div class="pager">
<?= LinkPager::widget(['pagination'=>$pagination])?>
</div>
</div>
