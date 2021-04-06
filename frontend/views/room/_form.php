<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Room */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="room-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Quality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Quantity')->textInput() ?>

    <?= $form->field($model, 'Bed')->textInput() ?>

    <?= $form->field($model, 'Room')->textInput() ?>

    <?= $form->field($model, 'View')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Balcony')->textInput() ?>

    <?= $form->field($model, 'Else')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Img')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
