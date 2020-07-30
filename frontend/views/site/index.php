<?php use yii\bootstrap4\Html;
use yii\grid\GridView;
use yii\grid\SerialColumn;
use yii\grid\ActionColumn;

/* @var $this yii\web\View */

$this->title = Yii::$app->name;
?>
<div class="site-index">
    <div class="body-content">
        <div class="row">
            <div class="col">
                <?= GridView::widget([
//                    'filterModel' => $requester,
                    'dataProvider' => $requesterDataProvider,
                    'summary' => false,
                    'columns' => [
                        'title',
                        'src',
                        [
                            'class' => ActionColumn::class,
                            'buttons' => [
                                'update' => static function ($url, $model, $key) {
                                    return Html::a('Check', 'request/' . $model->slug);
                                },
                            ],
                        ],
                    ],
                ]); ?>
            </div>
        </div>
    </div>
</div>
