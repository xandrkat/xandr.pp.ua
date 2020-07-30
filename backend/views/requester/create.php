<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Requester */

$this->title = 'Create request';
$this->params['breadcrumbs'][] = ['label' => 'Requesters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card card-primary card-outline">
    <div class="card-body">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>