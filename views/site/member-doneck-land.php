<?php
namespace app\model;
use Yii;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\TMemberDoneckLandImage;
use app\models\TMemberDoneckLand;
use app\models\TTypePublication;
use yii\bootstrap\Carousel;
use yii\widgets\LinkPager;
use yii\helpers\Url;
?>

<div class="centerdata">
<img src="/images/biblioteka/Biblioteka.jpg" alt="" />
<table>
<!--<td id="leftmenu">
<ul><li><a href="<?//=Yii::$app->urlManager->createUrl(['site/vestnik'])?>"><span>Печатные издания</span></a></li></ul>
</td>-->
<?php 
      $form = ActiveForm::begin();
?>

<?php 
$str='<h2>Выберите интересующий Вас раздел</h2>';
echo $form->field(new TTypePublication(), 'id')
->dropdownList(
TTypePublication::find()->select(['name', 'id'])
->indexBy('id')->column()
//['prompt'=>'Выберете источник','id'=>'source']
)
->label($str);
?>


    <div class="form-group">
        <?= Html::submitButton('Показать статьи выбранного раздела', ['class' => 'btn btn-success']) ?>
    </div>

<?php 
	ActiveForm::end();
?>
<tr>
<td><h1>Память земли Донецкой</h1></td><td /></tr>
<?php 
$model=TMemberDoneckLand::find();
if($post==1)
{
  $model=$model->offset($pagination->offset)
->limit($pagination->limit)
->orderBy(['title'=>SORT])
->where(['type_id'=>$type_id])
->all();
$model_image=TMemberDoneckLandImage::find()
->all();
}
else{
$model=$model->offset($pagination->offset)
->limit($pagination->limit)
->orderBy(['title'=>SORT])
->all();
$model_image=TMemberDoneckLandImage::find()
->all();
}
$i=0;
foreach($model as $item)
{
  	$i=$i+1;
?>
<tr>
<td>
<?php 
if($i!=0 && $i!=1)
{
?><hr><?php
}
?>
<?php 
		$model_image=TMemberDoneckLandImage::find()
		->where(['member_id'=>$item['id']])
		->one();
?>

<a href="<?php echo Url::to(['site/item-member-doneck-land', 'id' =>$item['id']]);?>"><h2><?php echo $item['title'];?></h2><img class="memberdonlandItemPhoto" src="<?= $model_image['name'];?>">
</td><td></td></tr>
<?php 
}
?>
<?= LinkPager::widget(['pagination'=>$pagination])?>
</table>
</div>
