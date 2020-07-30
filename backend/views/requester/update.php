<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Requester */

$this->title = 'Update Requester: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Requesters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="card card-primary card-outline">
    <div class="card-body">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>
