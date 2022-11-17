<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => '@web/favicon.ico']);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header class="header" id="header">
    <?php
    NavBar::begin([
        'brandLabel' => "Hold my wine",
        'brandUrl' => Yii::$app->homeUrl,
        'options' => ['class' => 'navbar-expand-md navbar-dark bg-dark fixed-top',
    ],
    ]);
    $items = [];
    if(Yii::$app->user->isGuest) {
        $items[] =  ['label' => 'Вино', 'url' => ['/wine']];
        $items[] =  ['label' => 'Блог', 'url' => ['/site']];
       // $items[] =  ['label' => 'Контакты', 'id' => ['footer']];
        $items[] =  ['label' => 'SignUp', 'url' => ['/user/create']];
        $items[] =  ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        if(Yii::$app->user->identity->admin == 1){
            $items[] =  ['label' => 'Вино', 'url' => ['/wine']];
            $items[] =  ['label' => 'Блог', 'url' => ['/article']];
          //  $items[] =  ['label' => 'Контакты', 'id' => ['footer']];
        } else {
            $items[] =  ['label' => 'Вино', 'url' => ['/wine']];
            $items[] =  ['label' => 'Блог', 'url' => ['/site']];
           // $items[] =  ['label' => 'Контакты', 'id' => ['footer']];
        }
        $items[] = '<li class="nav-item">'
            . Html::beginForm(['/site/logout'])
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->login . ')',
                ['class' => 'nav-link nav-but logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $items,
        /*'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'SignUp', 'url' => ['/user/create']],
            Yii::$app->user->isGuest
                ? ['label' => 'Login', 'url' => ['/site/login']]
                : '<li class="nav-item">'
                    . Html::beginForm(['/site/logout'])
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->login . ')',
                        ['class' => 'nav-link btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>'
        ]*/
    ]);
    NavBar::end();
    ?>
</header>
<div class="container">
<main id="main" class="flex-shrink-0" role="main">

        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>

</main>
<div class="container">
<div class="container">
    <hr class="footer_hr">
    <footer>
            <div class="logo">HMW</div>
            <div class="footer_icon">
                <img src="img/icon1.svg"  alt="">
                <img src="img/icon2.svg"  alt="">
                <img src="img/icon3.svg"  alt="">
            </div>
    </footer>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

<style>

.nav-but {
    width: 125px;
    height:20px;
    background-color: rgba(var(--bs-dark-rgb), var(--bs-bg-opacity)) !important;
}
.header {
    margin-top: 100px;
}

.footer_hr{
    margin-top: 200px;
}
.container{
    max-width: 1600px;

}

footer{
    width: 100%;
    margin-top: 46px;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    padding-bottom: 72px;
}

.logo{
    font-family: 'Coiny';
    font-style: normal;
    font-weight: 400;
    font-size: 32px;
    line-height: 35px;
    text-transform: uppercase;
    color: #FE0000;
}

.footer_icon{
    display: flex;
    gap: 20px;
}
</style>