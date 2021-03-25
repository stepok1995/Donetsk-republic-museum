<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;
use app\models\UploadFormHistory;
use kartik\file\FileInput;
use app\models\TFeedback;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model app\models\THistory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="thistory-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); 
    ?>

    <?php echo $form->field($model, 'login')->textInput()->hint('или не заполняйте поле и оставьте отзыв как "Гость"')->label('Введите своё имя'); 
    
   /* echo $form->field($model, 'text')->widget(TinyMce::className(), [
    'options' => ['rows' => 6],
    'language' => 'ru',
    'clientOptions' => [
        'plugins' => [
            'advlist autolink lists link charmap  print hr preview pagebreak',
            'searchreplace wordcount textcolor visualblocks visualchars code fullscreen nonbreaking',
            'save insertdatetime media table contextmenu template paste image'
        ],
        'toolbar' => 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image'
    ]
]);*/
	?>

    <?php echo $form->field($model, 'text')->textarea(['rows'=>10,'cols'=>10]);
    
    if (!preg_match ("/href|url|http|www|.ru|.com|.net|.info|.org/i", 'text')) {
        //ссылок не найдено,
        } else {
        die('найдена ссылка, ая-яй!'); //убиваем скрипт и выводим сообщение
        } 
    
    //$form->field($model,'text')->textInput(['style'=>'height:250px']);?>

    <div class="form-group">
        <?= Html::submitButton('ОТПРАВИТЬ', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
