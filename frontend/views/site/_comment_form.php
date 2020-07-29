<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\comments\models\Comments */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="comments-form">

    <?php $form = ActiveForm::begin(['action' => 'site/post-comment']); ?>
    <?= $form->field($model, 'parent_id')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'comment')->textarea(['rows' => 7])->label(false)  ?>

    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
