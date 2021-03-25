<?php
namespace app\model;
use Yii;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\models\TFeedback;
use yii\widgets\LinkPager;
?>


<div class="feedbackPage">
<div class="bannerFeedback">
<img style="width: 100%" src="/images/top/top7.jpg" alt="" />
</div>

<!--<p>
        <?php//= Html::a('Написать отзыв', ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->
<div class="contentFeedback">
<?= $this->render('_formfeedback', ['model' => $model_feed,]) ?>
<?php
foreach ($model as $item)
{    
?>
	<div class="divContentFeedback">		
								<div class="nikFeedback">
								<div class="date_feedback">
								<?php echo $item['login'];?>
</div>
								</div>
                                
                                		<div class="dateFeedback">
										<p>
										<?php echo $item['date'];?>
										</p>
									</div>

									<div class="textFeedback">
									<p>
										<?php echo nl2br($item['text']);?>
									</p>
									</div>											
</div>


<?php
}
?>
<div class="pager">
<?= LinkPager::widget(['pagination'=>$pagination])?>
</div>
</div>

</div>
