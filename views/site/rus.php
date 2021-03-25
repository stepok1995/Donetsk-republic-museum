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

<div class="rusPage">
	<div class="rusBanner">
		<h1>Русский центр</h1>
	</div>
	<div class="rusImg">
		<a href="http://www.mincult.govdnr.ru/russkiy-centr">
			<img src="/images/RusCentre_.png" alt="" />
		</a>
	</div>
	<div class="rusTitle">		
		<p align="justify"><i>Основан с целью усиления процессов интеграции Донбасса с Российской Федерацией в гуманитарных, социальных и культурных аспектах, создания прочных и устойчивых взаимоотношений между общественными организациями Донецкой Народной Республики и субъектами Российской Федерации.</i></p>

	</div>

	<div class="rusText">
		<h2 style="text-align: center; font-size: 200%; font-weight: bold;">Новости по теме:</h2>
	<hr />
		<?php
		$i=0;
$monthes=[
1=>'января', 2=>'февраля', 3=>'марта', 4=>'апреля', 5=>'мая', 6=>'июня',
7=>'июля', 8=>'августа', 9=>'сентября', 10=>'октября', 11=>'ноября', 12=>'декабря',
];
		?>
		<div class="content">
			<?php foreach($model as $item)
			{
				$i=$i+1;
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
				<div class="photo">
					<a href="<?php echo Url::to(['site/item-actions', 'id' =>$item['id']]); ?>">				
						<img src="<?= $item['img_preview'];?>">				
					</a>
				</div>
				<div class="title">
					<a href="<?php echo Url::to(['site/item-actions', 'id' =>$item['id']]); ?>">		
						<h2><?php echo $item['title'];?></h2>		
					</a>
				</div>
					<?php if($date_words!=null){ ?>		
						<div class="dateNews">
							<span><?php echo $date_words;?></span>
						</div>
					<?php } ?>
				<!--<div class="description">-->
					<?php 
					// echo nl2br($item['text_preview'])?>	
				<!--</div>-->			
			</div>
			<hr />
				<?php
				}
				?>	
		</div>
		<div class="pager">
			<?= LinkPager::widget(['pagination'=>$pagination])?>
		</div>
	</div>
</div>
