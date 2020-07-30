<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Requester */

$this->title = 'Create Requester';
$this->params['breadcrumbs'][] = ['label' => 'Requesters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="requester-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
