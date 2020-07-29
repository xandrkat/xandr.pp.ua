<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->params['breadcrumbs'][] = $post->title;
?>
<div class="site-about">
    <h1><?= Html::encode($post->title) ?></h1>
    <p>
        <?=$post->body?>
    </p>
    <hr>
    <?php if (empty($comments)) : ?>
        <p>Коментариев еще нет.</p>
    <?php endif;  ?>
    <?php foreach ($comments as $comment) :?>
        <hr>
    <?php endforeach;?>
    <?php
    if (Yii::$app->user->isGuest) :?>
        <h4>Вы не залогинены: <?=Html::a('Залогинится', Url::to(['site/login']))?></h4>
    <?php else : ?>
        <h4>
            Написать коментарий:
        </h4>
        <?=$this->render('_comment_form', ['model' => $comment])?>
    <?php endif; ?>

</div>
