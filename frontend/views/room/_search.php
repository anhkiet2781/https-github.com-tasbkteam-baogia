<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\RoomSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="room-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Name') ?>

    <?= $form->field($model, 'Quality') ?>

    <?= $form->field($model, 'Quantity') ?>

    <?= $form->field($model, 'Bed') ?>

    <?= $form->field($model, 'Room') ?>

    <?php // echo $form->field($model, 'View') ?>

    <?php // echo $form->field($model, 'Balcony') ?>

    <?php // echo $form->field($model, 'Else') ?>

    <?php // echo $form->field($model, 'Img') ?>

    <?php // echo $form->field($model, 'Id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
