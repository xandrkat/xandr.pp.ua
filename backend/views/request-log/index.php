<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\RequestLogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Request Logs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="request-log-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Request Log', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'src',
            'user_email:email',
            'code',
            'timestamp:datetime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
