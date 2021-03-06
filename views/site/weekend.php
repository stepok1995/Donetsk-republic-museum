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
		<h1>Нескучный выходной</h1>
	</div>
	<div class="weekendContent">
		<div>		
<p><i>Социально-культурная акция &laquo;Нескучный выходной&raquo; была инициирована Министерством культуры Донецкой Народной Республики в рамках реализации Гуманитарной программы по воссоединению народа Донбасса.<br>
	Акция реализуется республиканскими учреждениями культуры ДНР на постоянной основе с июня 2017 года.</i></p>

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