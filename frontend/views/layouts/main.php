<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
$this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="skin-black sidebar-mini">
<?php $this->beginBody(); ?>
<div class="wrapper">

        <?php NavBar::begin([
            'renderInnerContainer' => false,
            'options' => [
                'class' => 'main-header navbar-expand navbar-white navbar-light',
            ],
        ]);
        $headerMenuItems = [
            ['label' => 'Home', 'url' => ['/site/index']],
        ];
        if (Yii::$app->user->isGuest) {
            $headerMenuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
        } else {
            $headerMenuItems[] = '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>';
        }
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav px-3'],
            'items' => $headerMenuItems,
        ]);
        NavBar::end();
        ?>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <?=Html::a(Html::tag('span', Yii::$app->name, ['class' => 'brand-text font-weight-light']), Url::home(),['class' => 'brand-link'])?>
        <section class="sidebar">
            <?php
            $sidebarMenuItems = [['label' => 'Home', 'url' => ['/']]];
            echo Nav::widget([
                'options' => ['class' => 'nav-sidebar flex-column mt-2', 'data-widget' => 'tree'],
                'items' => $sidebarMenuItems,
            ]);
            ?>
        </section>
    </aside>
    <?= Alert::widget() ?>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark"><?=$this->title?></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <?= Breadcrumbs::widget([
                            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        ]) ?>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <?= $content ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="main-footer">
        <div class="float-right d-none d-sm-inline">
            <?=Yii::$app->name?>
        </div>
        <strong>Copyright © <?=date('Y')?>  <?=Yii::$app->name?> </strong> All rights reserved.
    </footer>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
