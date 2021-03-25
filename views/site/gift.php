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

<div class="giftPage">
	<div class="giftBanner">
		<h1>Дни дарения</h1>
	</div>

	<div class="giftContent">
			<div>		
<p><i>Акция &laquo;Дни дарения&raquo; проходит с 1 февраля 2018 года в рамках реализации Гуманитарной программы по воссоединению Донбасса, Года истории Донбасса и музейного проекта &laquo;Сохраним историю Донбасса вместе&raquo;. Акция реализуется на постоянной основе.<br>
	Цель акции &ndash; целенаправленное тематическое комплектование музейного фонда по истории родного края, а также сохранение, презентация и популяризация культурно-исторического наследия. В рамках акции &laquo;Дни дарения&raquo; Донецкий республиканский краеведческий музей принимает в дар от жителей предметы досоветского и советского периодов.<br>
	Адрес музея: г. Донецк, ул. Челюскинцев, 189-А (ост. гостиница &laquo;Шахтер&raquo;). Телефоны для справок: (062) 311-33-51; 311-48-63.</i></p>

	</div>
			<h2 style="text-align: center; font-size: 200%; font-weight: bold;">Новости по теме:</h2>	<hr />
		<?php
			$serv_time=date_default_timezone_set('Russia/Moscow');
				$today_date=date('Y-m-d H:i:s');
			$i=0;
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
				
		<div class="giftContentTable">
			<?php 
			$monthes=[
1=>'Января', 2=>'Февраля', 3=>'Марта', 4=>'Апреля', 5=>'Мая', 6=>'Июня',
7=>'Июля', 8=>'Августа', 9=>'Сентября', 10=>'Октября', 11=>'Ноября', 12=>'Декабря',
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
					<div>
						<img src="<?= $item['img_preview'];?>">
					</div>
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
				<?php 
					//echo nl2br($item['text_preview'])?>
			</div>-->
		</div>
		<?php
		}
			}
		?>
		<?= LinkPager::widget(['pagination'=>$pagination])?>
	</div>
</div>