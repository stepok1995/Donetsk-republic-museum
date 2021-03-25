<?php
namespace app\model;
use Yii;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\models\TPreiskurant;
use app\models\TPreiskurantExc;
use app\models\TOld;
use app\models\TTypeExc;
?>

<div class="preiskurantPage">
	<div class="bannerPreiskurant">
		<img style="width: 100%" src="/images/top/top15.jpg" alt="" />
	</div>
	<div class="contentPreiskurant">
		<h1>Стоимость услуг</h1><br/>
		<!--<h2>Донецкий республиканский краеведческий музей</h2><br/>-->
		<div class="roller">
	<?php
	foreach($model as $item)
	{
		echo nl2br($item['text']);	
	}
	?>		
		</div>
	</div>
</div>