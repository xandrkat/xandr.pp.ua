<?php

/* @var $this yii\web\View */

use yii\bootstrap\Html;
use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Blog!</h1>

        <p class="lead">Test Blog</p>

    </div>

    <div class="body-content">

        <div class="row">
            <?php  foreach ($posts as $post) : ?>
                <div class="col-lg-12">
                    <h2><?=$post->title?></h2>

                    <p><?=$post->description?></p>

                    <p><?=Html::a('Подроднее', Url::to($post->slug))?></p>
                    <hr>
                </div>
            <?php endforeach;  ?>

        </div>

    </div>
</div>
