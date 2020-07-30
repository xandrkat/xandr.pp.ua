<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Requester */
/* @var $form yii\widgets\ActiveForm */
?>


    <?php $form = ActiveForm::begin(); ?>
<div class="row">

    <div class="col-6">
        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-6">
        <?= $form->field($model, 'src')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-12">
    <div class="form-group float-right">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success ']) ?>
    </div>
    </div>
</div>
    <?php ActiveForm::end(); ?>

