<?php

use yii\bootstrap4\Html;
use yii\widgets\Pjax;

$this->title = $request->title;
?>
<div class="card card-primary card-outline">
    <div class="card-header">
        <h5 class="m-0">Город: <small class="text-muted"><?=$request->title?></small>, IP: <small class="text-muted"><?=$request->src?></small></h5>
    </div>
    <div class="card-body">
        <?php Pjax::begin(); ?>
            <?= Html::beginForm(['site/request', 'slug' => $request->slug], 'POST', ['class' => 'form', 'data-pjax' => true]); ?>
            <div class="input-group mb-3">
                <?= Html::input('url', 'checkSrc', null, ['placeholder' => 'src to need be checked', 'required' => 'required', 'class' => 'form-control']); ?>
                <div class="input-group-append">
                    <?= Html::submitButton('Send', ['class' => 'btn btn-info btn-flat']); ?>
                </div>
            </div>
            <?= Html::hiddenInput('fromSrc', $request->src); ?>
            <?= Html::endForm(); ?>
            <?php
            if (!is_null($result)){
                echo "Код ответа: ";\yii\helpers\VarDumper::dump($result->headers->get('http-code'), 100, true);
            }
            Pjax::end();
            ?>
    </div>
</div>
