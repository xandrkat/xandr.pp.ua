<?php

use yii\grid\SerialColumn;
use yii\grid\ActionColumn;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\RequesterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Requester';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card card-primary card-outline">
    <div class="card-header">
        <h5 class="m-0 float-left">List</h5>
        <?=Html::a('Create', 'requester/create', ['class' => 'btn btn-primary float-right'])?>
    </div>
    <div class="card-body">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'summary' => false,
            'columns' => [
                ['class' => SerialColumn::class],

                'title',
                'src',
                [
                    'class' => ActionColumn::class,
                    'template' => '{update} {delete}',
                    'buttons' => [
                        'update' => static function ($url, $model, $key) {
                            return Html::a('Update', ['requester/update','id' => $model->id], ['class' => 'btn btn-success']);
                        },
                        'delete' => static function ($url, $model, $key) {
                            return Html::a('Delete', ['requester/delete','id' => $model->id], ['class' => 'btn btn-danger', 'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                                'data-method' => 'post',]);
                        },
                    ],
                ],
            ],
        ]); ?>
    </div>
</div>

