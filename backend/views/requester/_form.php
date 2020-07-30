<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Requester */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="requester-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'src')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
