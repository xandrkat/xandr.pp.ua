<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Requester */

$this->title = 'Update Requester: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Requesters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="requester-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
