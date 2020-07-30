<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\RequestLog */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="request-log-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'src')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'code')->textInput() ?>

    <?= $form->field($model, 'timestamp')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
