<?php

/* @var $this \yii\web\View */

/* @var $content string */

use backend\assets\AppAsset;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
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
<body>
<?php $this->beginBody();
NavBar::begin([
    'brandLabel' => Yii::$app->name,
    'brandUrl' => Yii::$app->homeUrl,
    'brandOptions' => [
        'class' => 'navbar-brand col-md-3 col-lg-2 mr-0 px-3'
    ],
    'renderInnerContainer' => false,
    'options' => [
        'class' => 'navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow',
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
<div class="container-fluid">
    <?= Alert::widget() ?>
    <div class="row">
        <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="sidebar-sticky pt-3">
                <?php
                $sidebarMenuItems = [['label' => 'Home', 'url' => ['/']]];
                $sidebarMenuItems[] = ['label' => 'Requester', 'url' => ['/requester']];
                $sidebarMenuItems[] = ['label' => 'RequestLog', 'url' => ['/request-log']];
                echo Nav::widget([
                    'options' => ['class' => 'flex-column'],
                    'items' => $sidebarMenuItems,
                ]);
                ?>
            </div>
        </nav>
        <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <?= $content ?>
            </div>
        </main>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
