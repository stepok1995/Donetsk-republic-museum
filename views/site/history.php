<?php
namespace app\model;
use Yii;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\models\THistory;
use app\models\THistoryImage;
?>
<div class="historyPage">
<div class="bannerHist">
<img style="width: 100%" src="/images/top/top12.jpg" alt="" />
</div>


<div class="contentHist">

<?php
$monthes=[
1=>'января', 2=>'февраля', 3=>'марта', 4=>'апреля', 5=>'мая', 6=>'июня',
7=>'июля', 8=>'августа', 9=>'сентября', 10=>'октября', 11=>'ноября', 12=>'декабря',
];
$per=' ';
foreach ($model as $item)
{    
//$list($per1, $per2)=explode(" ",$item['date']);
//$date=date('j ', 1).$monthes[date('n', $month)].date('  Y', $year);
//echo $date;
?>
	<div class="divContentHist">		

								<?php
								if($item['date']!=$per)
								{
									$per=$item['date'];
								?>
								<div class="dateHist">
								<div class="date_september">
								<?php echo $item['date'];?>
									<!--<div class="separation"></div>-->
								</div>
								</div>
								<?php
								}
									$history_image=THistoryImage::find()
									->where(['history_id'=>$item['id']])
									->asArray()
									->all();
								?>
				
									<div class="imgHist">
										<p><img src="<?= $history_image[0]['name']?>"></p>
									</div>

									<div class="textHist">
									
										<?php echo nl2br($item['text']);?>
									
									</div>
</div>


<?php
}
?>

</div>

</div>
