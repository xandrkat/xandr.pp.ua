<?php use yii\bootstrap4\Html;
use yii\grid\GridView;
use yii\grid\SerialColumn;
use yii\grid\ActionColumn;

/* @var $this yii\web\View */

$this->title = Yii::$app->name; ?>
<div class="card card-primary card-outline">
    <div class="card-body">
        <?php
        if (Yii::$app->user->isGuest) {
            echo Html::tag('h3', 'Please '.Html::a('Login', ['site/login']).' or '.Html::a('Register', ['site/signup']), ['class' => 'text-center']);
        } else { ?>
            <?= GridView::widget([
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
        <?php } ?>
    </div>
</div>