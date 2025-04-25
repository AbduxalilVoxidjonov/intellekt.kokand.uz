<?php

/** @var yii\web\View $this */

/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\Url;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
$this->title = "Intellekt Kokand";
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column min-vh-100 bg-light m-4"> <!-- ← m-0 qo‘shildi -->

<?php $this->beginBody() ?>

<header id="header">
    <?php
    NavBar::begin([
        'brandLabel' => Html::img('@web/images/logo-dark-transparent.png', [
            'alt' => Yii::$app->name,
            'style' => 'height: 60px;',
        ]),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-lg navbar-light bg-white fixed-top',
        ],
    ]);

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav ms-auto'],
        'items' => [
            ['label' => 'Nima uchun biz?', 'url' => ['#why_us']],
            ['label' => 'Maktab haqida', 'url' => ['#why_school']],
            [
                'label' => 'Gallery',
                'items' => [
                    ['label' => "Maktab hayoti", 'url' => ['#about_school']],
                    ['label' => "O'quvchilarimiz yutuqlari", 'url' => ['#results']],
                ],
            ],
            ['label' => 'Narxlar', 'url' => ['#price']],
            ['label' => "O'qituvchilar", 'url' => ['#']],
            ['label' => 'Bog\'lanish', 'url' => ['#contact']],
        ],
    ]);
    echo Html::a(
        '<img src="' . Yii::getAlias('@web/assets/img/telegram.png') . '" alt="Icon" width="30" height="30" />',
        ['#telegram'],
    );

    echo Html::a('Ariza yuborish uchun', ['/site/login'], [
        'class' => 'btn btn-outline-success ms-3',
        'style' => 'font-weight: 500; padding: 8px 20px;'
    ]);

    NavBar::end();
    ?>
</header>

<!-- Main content with top padding to avoid navbar overlap -->
<main id="main" role="main" class="flex-grow-1 pt-5 mt-5 px-0"> <!-- ← px-4 ni px-0 qildik -->
    <div class="container-fluid"> <!-- ← container o‘rniga container-fluid -->
        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer id="footer" class="mt-auto py-3 bg-light px-0"> <!-- ← px-4 ni px-0 -->
    <div class="container-fluid"> <!-- ← container o‘rniga container-fluid -->
        <div class="row text-muted">
            <div class="col-md-6 text-center text-md-start">&copy; My Company <?= date('Y') ?></div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
