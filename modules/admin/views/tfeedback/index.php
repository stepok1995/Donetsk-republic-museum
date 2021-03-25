<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use app\models\THistory;
use app\models\THistoryImage;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */
/* @var $searchModel app\models\THistorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>
<div class="historyPage">
<div class="bannerHist">
<img style="width: 100%" src="/images/top/top12.jpg" alt="" />
</div>


<div class="contentHist">
<h1>Книга отзывов</h1>
<?php
			$monthes=[
			1=>'января', 2=>'февраля', 3=>'марта', 4=>'апреля', 5=>'мая', 6=>'июня',
			7=>'июля', 8=>'августа', 9=>'сентября', 10=>'октября', 11=>'ноября', 12=>'декабря',
			];
			$date_wordsper = strtotime($item['date']);
			$date_words = date('j ', $date_wordsper).$monthes[date('n', $date_wordsper)].date('  Y', $date_wordsper);
foreach ($model as $item)
{    
?>
	<div class="divContentHist">		
								<div class="dateHist">
								<div class="date_september">
								<?php echo $item['login'];?>
								</div>
								</div>
                                
                                		<div class="imgHist">
										
                                        <?php echo $item['date'];?>
									</div>

									<div class="textHist">
									
										<?php echo nl2br($item['text']);?>
									
									</div>	
									<p>
        <?= Html::a('Редактировать', ['update', 'id' => $item['id']], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $item['id']], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены? Запись будет удалена безвозвратно!!!',
                'method' => 'post',
            ],
        ]) ?>
</p>										
</div>


<?php
}
?>
<div class="pager">
<?= LinkPager::widget(['pagination'=>$pagination])?>
</div>
</div>

</div>

