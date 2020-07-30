<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\RequesterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Requester';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col">
        <div class="row">
            <div class="col"><h1><?= Html::encode($this->title) ?></h1></div>
            <div class="col"><p
                        class="text-right"><?= Html::a('Create', ['create'], ['class' => 'btn btn-success border-0 rounded-0']) ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        'title',
                        'src',

                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?>
            </div>
        </div>
    </div>
</div>


