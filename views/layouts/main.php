<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\bootstrap\Carousel;
use app\components\FBFWidget;
use app\components\CLKWidget;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
	<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(45205026, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/45205026" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</head>

<?php $this->beginBody() ?>
<div class="loader">
<center>
   <div class="circle"></div>
   <div class="circle"></div>
   <div class="circle"></div>
   <div class="circle"></div>
  </center>
</div>
<div class="mainSHOW">
	<div class="top" style="z-index: 100;">
	<div id="top">
	<div style="margin-left: 15px;">
		<span>
		<h4>
		<p class="toptext">
			Режим работы:<br>
			9:00 - 17:00<br>
			выходные дни - понедельник, вторник<br>
			</p>
			<p class="toptext">Адрес музея:<br>
			Донецкая Народная Республика<br>
			г.Донецк, ул.Челюскинцев, 189-А<br>
			Телефон: (062) 311 33 51</p>
			</h4>
		</span>
	<a href="http://drkm-dnr.ru/" class="logo_a"></a>
	</div>

</div>

<div id="menu" style="background-color: #245f18; width: 100%; text-align: center !important;">
	<ul class="sc_menu-body" style="margin: 0 auto; display: inline-block;">
		<li><a class="pressed" href="<?=Yii::$app->urlManager->createUrl(['site/main'])?>"><span>Главная</span></a></li>

		<li><a href="<?=Yii::$app->urlManager->createUrl(['site/history'])?>"><span>О Музее</span></a>
			<ul>
				<li><a href="<?=Yii::$app->urlManager->createUrl(['site/history'])?>"><span>История музея</span></a></li>
				<!--<li><a href="<?=Yii::$app->urlManager->createUrl(['site/administration'])?>"><span>Руководство</span></a></li>-->

			<li><a href="<?=Yii::$app->urlManager->createUrl(['site/wow'])?>"><span>Отделы</span></a>
			<ul class="submenu">
				<li><a href="<?=Yii::$app->urlManager->createUrl(['site/wow'])?>"><span>Военно-исторический музей Великой Отечественной Войны</span></a></li>
				<li><a href="<?=Yii::$app->urlManager->createUrl(['site/saur'])?>"><span>Мемориальный комплекс Саур-Могила</span></a></li>
			</ul>
			</li>
				<li><a href="<?=Yii::$app->urlManager->createUrl(['site/kontakts'])?>"><span>Контакты</span></a></li>
				<li><a href="<?=Yii::$app->urlManager->createUrl(['site/tender'])?>"><span>Документы</span></a>
          <ul class="submenu">
            <li><a href="<?=Yii::$app->urlManager->createUrl(['site/tender'])?>"><span>Тендерные закупки</span></a></li>
          </ul>
        </li>
				<!--<li><a href="./Kollekcii.html"><span>Коллекции</span></a></li>
				<li><a href="<?php//=Yii::$app->urlManager->createUrl(['site/library'])?>"><span>Библиотека</span></a></li>-->
			</ul>
		</li>
		<li><a href="<?=Yii::$app->urlManager->createUrl(['site/preiskurant'])?>"><span>Посетителю</span></a>
			<ul>
			<li><a href="<?=Yii::$app->urlManager->createUrl(['site/feedback'])?>"><span>Книга отзывов</span></a></li>
			<li><a href="<?=Yii::$app->urlManager->createUrl(['site/visitingrules'])?>"><span>Правила посещения</span></a></li>
					<li><a href="<?=Yii::$app->urlManager->createUrl(['site/grafik'])?>"><span>График работы</span></a></li>
					<li><a href="<?=Yii::$app->urlManager->createUrl(['site/floor1'])?>"><span>Экспозиции</span></a>
							<ul class="submenu">
								<li><a href="<?=Yii::$app->urlManager->createUrl(['site/floor1'])?>"><span>Этаж 1</span></a></li>
								<li><a href="<?=Yii::$app->urlManager->createUrl(['site/floor2'])?>"><span>Этаж 2</span></a></li>
								<li><a href="<?=Yii::$app->urlManager->createUrl(['site/floor3'])?>"><span>Этаж 3</span></a></li>
								<li><a href="<?=Yii::$app->urlManager->createUrl(['site/floor4'])?>"><span>Этаж 4</span></a></li>
							</ul>
					</li>
					<li><a href="<?=Yii::$app->urlManager->createUrl(['site/show'])?>"><span>Выставки</span></a></li>
					<li><a href="<?=Yii::$app->urlManager->createUrl(['site/project'])?>"><span>Интерактивы</span></a></li>
					<li><a href="<?=Yii::$app->urlManager->createUrl(['site/excersi'])?>"><span>Экскурсии</span></a></li>
					<!--<li><a href="<?php //=Yii::$app->urlManager->createUrl(['site/afisha'])?>"><span>Афиша</span></a></li>-->
					<li><a href="<?=Yii::$app->urlManager->createUrl(['site/preiskurant'])?>"><span>Прейскурант</span></a></li>
			</ul>
      <li><a href="<?=Yii::$app->urlManager->createUrl(['site/virtualmuseum'])?>"><span>Виртуальные туры</span></a>
      <ul class="submenu">
        <li><a href="<?=Yii::$app->urlManager->createUrl(['site/virtualmuseum'])?>"><span>Виртуальный тур по Донецкому республиканскому краеведческому музею</span></a></li>
        <li><a href="<?=Yii::$app->urlManager->createUrl(['site/virtualmuseumwow'])?>"><span>Виртуальный тур по Военно-историческому музею Великой Отечественной войны</span></a></li>
		<li><a href="<?=Yii::$app->urlManager->createUrl(['site/interactivemap'])?>"><span>Интерактивная карта "Места славы и бессмертия"</span></a></li>
      </ul>
      </li>
		</li>
		<li><a href="<?=Yii::$app->urlManager->createUrl(['site/weekend'])?>"><span>Музейные проекты</span></a>
		<ul>
		<li><a href="<?=Yii::$app->urlManager->createUrl(['site/weekend'])?>"><span>Нескучный выходной</span></a></li>
		<li><a href="<?=Yii::$app->urlManager->createUrl(['site/gift'])?>"><span>Дни дарения</span></a></li>
    <li><a href="<?=Yii::$app->urlManager->createUrl(['site/intermus'])?>"><span>Интермузей</span></a></li>
		</ul>
		</li>

		<li><a href="<?=Yii::$app->urlManager->createUrl(['site/actions'])?>"><span>Новости</span></a></li>
		<li><a href="<?=Yii::$app->urlManager->createUrl(['site/vestnik'])?>"><span>Публикации</span></a>
				<ul>
				<li><a href="<?=Yii::$app->urlManager->createUrl(['site/interview'])?>"><span>Интервью</span></a></li>
				<li><a href="<?=Yii::$app->urlManager->createUrl(['site/ourhistory'])?>"><span>Страницы нашей истории</span></a></li>
				<li><a href="<?=Yii::$app->urlManager->createUrl(['site/zemlaki'])?>"><span>Земляки</span></a></li>
				<li><a href="<?=Yii::$app->urlManager->createUrl(['site/landmarks'])?>"><span>Достопримечательности Донбасса</span></a></li>
				<li><a href="<?=Yii::$app->urlManager->createUrl(['site/historyoneexp'])?>"><span>История одного экспоната</span></a></li>
				<li><a href="<?=Yii::$app->urlManager->createUrl(['site/vestnik'])?>"><span>Музейный вестник</span></a></li>
				</ul>
		</li>
		
		
		<li><a href="<?=Yii::$app->urlManager->createUrl(['site/homemuseum'])?>"><span>Музей в каждый дом</span></a></li>

	</ul>
</div>
</div>


<div class="ready">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
</div>


	<?php
	$link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; //получаем URL
	$id=parse_url($link); //распарсиваем ссылку на части
	$id_news=$id['query']; //получаем id события
	$id_news_id=substr($id_news, 3);
	$id_news_int=(int) $id_news_id;
	//echo $id_news;
	?>
<?= FBFWidget::widget(['id'=>$id_news_int]) ?>
<script type="text/javascript" src="https://vk.com/js/api/openapi.js?161"></script>

<!— VK Widget —>
<div id="vk_community_messages"></div>
<script type="text/javascript">
VK.Widgets.CommunityMessages("vk_community_messages", 107168701, {expanded: "1",tooltipButtonText: "Есть вопрос?"});
</script>

<footer class="footer">
   <div id="bottom" style="margin-top: 0px;">
<table><tbody><tr>
<td class="text_footer"><strong>Министерство культуры <br>Донецкой Народной Республики</strong><br>
<a href="http://www.mincult.govdnr.ru/"><img src="/images/min_kult_.png" alt=""></a>
<p></p>
</td>
<td class="text_footer"><strong>Как нас найти</strong><br><br>
<a href="https://yandex.ua/maps/142/donetsk/?lang=ru&mode=search&text=Ljytwrbq%20rhftdtlxtcrbq%20veptq&sll=37.802850%2C48.015877&sspn=0.314484%2C0.122316&ol=biz&oid=1116296039&ll=37.804781%2C48.025074&z=16"><img src="/images/futer/map.jpg" alt=""></a>
</td>
<td  class="text_footer" style="width:130px"><strong>Мы&nbsp;в&nbsp;социальных&nbsp;сетях:</strong><br><br>

<a href="https://vk.com/drkm_official" class="soc1"></a>
<a href="https://www.facebook.com/drkm.official" class="soc2"></a>
<!--<a href="./#" class="soc3"></a>-->
<br><br><br><br>
<!--LiveInternet logo-->
</td>
<td>

</td>
<td></td>
</tr></tbody></table>
<div>

<div>
<span style="text-align: center !important;">Разработано отделом компьютерных технологий, печати и научной информации Донецкого республиканского краеведческого музея | 2020</span>
</div>
</div>
</div>
</footer>
</div>

<?php $this->endBody() ?>
<?php $this->endPage() ?>
