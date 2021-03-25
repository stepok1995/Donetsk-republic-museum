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

<div class="contactPage">

	<!--<div class="bannerCont">
	<img src="/images/top/map.png" alt="" />
	</div> -->
	<!--<div class="contactGreen">
		<div class="portraitCont">
		<img src="/images/director.jpg" alt="" />
			<h5>ГЕНЕРАЛЬНЫЙ ДИРЕКТОР<br /><br />
			Денис Александрович
			Кузнецов
		</h5>
		</div>
	</div>-->
	<div class="contentCont">
	<h1>Контакты</h1>
	<?php
	foreach($model as $item)
	{
		echo nl2br($item['text']);
	}
	
	?>
		
		<!--<p>Государственное учреждение культуры<br />
		<b>"Донецкий республиканский краеведческий музей"</b>
		283048, Донецкая Народная Республика,<br />
		Донецк,
		ул. Челюскинцев, 189 «а»<br />
		Ближайшая остановка трамвая - «Гостиница Шахтёр», троллейбуса - «Проспект Титова».<br />
		Телефон приемной: 311-48-63<br />
		Справки и заявки на экскурсии по телефонам: (071) 314-01-10, 311-33-51, (095) 845-09-28<br />
		<b>Сайт:</b> www.drkm-dnr.ru<br />
		<b>Электронная почта:</b> drkm_official@yandex.ru<br />
		<b>Соцсети:</b> vk.com/drkm_official, facebook.com/drkm.official/<br />
		</p>
		<p>
		<b> Военно-исторический музей Великой Отечественной войны</b> –<br />
		отдел  Государственного учреждения культуры<br />«Донецкий республиканский краеведческий музей»<br />
		283048 ДНР, г. Донецк ул. Челюскинцев, 189 «к» (парк Ленинского комсомола) <br />
		Справки и заявки на экскурсии по телефонам: (071) 304-42-80, (050) 276-60-06, (066) 729-03-41<br />
		<b>Сайт:</b> www.drkm-dnr.ru<br />
		<b>Электронная почта:</b> drkm_official@yandex.ru<br />
		<b>Соцсети:</b> vk.com/musvovdnr<br />
		</p>-->
	</div>
<!-- <td id="leftmenu">
// <ul><li><a href="<?php //=Yii::$app->urlManager->createUrl(['site/grafik'])?>"><span>График работы</span></a></li><li><a class="pressed" href="<?php //=Yii::$app->urlManager->createUrl(['site/preiskurant'])?>"><span>Прейскурант</span></a></li><li>	<a href="<?php //=Yii::$app->urlManager->createUrl(['site/excersi'])?>"><span>Экскурсии</span></a></li><li><a href="<?php //=Yii::$app->urlManager->createUrl(['site/project'])?>"><span>Музейные проекты</span></a></li><li><a href="<?php //=Yii::$app->urlManager->createUrl(['site/kontakts'])?>"><span>Контакты</span></a></li></ul>
// </td> -->

</div>





