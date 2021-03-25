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

<div class="grafikPage">
	<!-- <div class="bannerGraf"> 
		<img style="width: 100%" src="/images/top/top2.jpg" alt="" />
	</div> -->
	<div class="contentGraf">
			<h1>График работы</h1><br />
	<?php
	foreach($model as $item)
	{
		echo nl2br($item['text']);
	}
	?>
		<!--<p>Понедельник, вторник — <strong>выходной</strong><br /> среда-воскресенье – <strong>с 9.00 до 16.00</strong><br /> Касса работает до <strong>15.30</strong>
		Санитарный день – <strong>последний четверг месяца.</strong><br /> День бесплатного посещения (экскурсии оплачиваются) – <strong>последняя среда месяца.</strong></p>
		<p>Предварительная запись на экскурсии, мероприятия и справки по телефону:
		311-33-51, (071)-314-01-10</p>
		<p>Экспозиционные залы и выставки можно самостоятельно осмотреть в любое время в часы работы музея. </p>-->
	</div>
</div>
