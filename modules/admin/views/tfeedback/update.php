<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\THistory */

$this->title = 'Update Tfeedback: {nameAttribute}';
?>
<div class="thistory-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
