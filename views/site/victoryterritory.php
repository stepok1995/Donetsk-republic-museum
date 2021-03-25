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

<div class="gumPage">
	<div class="gumBanner">
		<h1>Федеральный проект «Территория Победы» (Музей Победы, г. Москва)</h1>
	</div>
	<div class="gumImg">
			<img src="/images/victoryterritory.jpg" alt="" />

	</div>
	<div class="gumTitle">		
		<p align="justify"><i>Масштабный федеральный проект «Территория Победы», направленный на создание единого пространства по военной истории ХХ века, стартовал в 2017 году. Инициатором проекта выступил Музей Победы (Музей Великой Отечественной войны 1941 – 1945 гг., г. Москва). О поддержке проекта заявили все субъекты Российской Федерации. Более 200 музеев на территории России стали филиалами Музея Победы, а значит, – партнёрами и единомышленниками в сохранении исторической правды. Проект охватил всю страну, объединив региональные и муниципальные, частные и школьные музеи, связанные с темой Великой Отечественной войны. </i><br />
        <br /><i>В ноябре 2019 года к проекту «Территория Победы» присоединился Донецкий республиканский краеведческий музей. Подписание соответствующего соглашения состоялось в ходе VIII Международного культурного форума в Санкт-Петербурге. Целью документа является осуществление совместной деятельности по сохранению исторической памяти о Победе в Великой Отечественной войне посредством реализации экспозиционно-выставочных, информационных и духовно-просветительских проектов. Предметом соглашения является установление дружественных и профессиональных контактов в области музейно-выставочной работы, межмузейного сотрудничества, обмена научной информацией и укрепления культурных связей.</i>
        </p>

	</div>
	<div class="gumText">
		<div class="banner">
		<!--<img src="/images/top/top2.jpg" alt="" />-->
		</div>
		<h2 style="text-align: center; font-size: 200%; font-weight: bold;">Новости по теме:</h2>
	<hr />
		<?php
		$i=0;
		$monthes=[
		1=>'Января', 2=>'Февраля', 3=>'Марта', 4=>'Апреля', 5=>'Мая', 6=>'Июня',
		7=>'Июля', 8=>'Августа', 9=>'Сентября', 10=>'Октября', 11=>'Ноября', 12=>'Декабря',
		];
		?>
		<div class="content">
			<?php 
				$serv_time=date_default_timezone_set('Russia/Moscow');
				$today_date=date('Y-m-d H:i:s');
			foreach($model as $item)
			{
					if($today_date>=$item['datetime'])
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
						//echo nl2br($item['text_preview'])?>
					<!--</div>-->			
			</div>
			<hr />

			<?php
			}
			}
			?>
		</div>
		<div class="pager">
			<?= LinkPager::widget(['pagination'=>$pagination])?>
		</div>
	</div>
</div>