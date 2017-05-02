<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AdminAppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;


AdminAppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">

    <?php
    NavBar::begin([
        'brandLabel' => 'Вернуться на сайт',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Главная Админки', 'url' => ['default/index']],
          //  ['label' => 'Статьи', 'url' => ['article/index']],
           // ['label' => 'Теги', 'url' => ['tag/index']],
            ['label' => 'Святошин', 'url' => ['schedule-svyatoshino-1/index']],
            ['label' => 'Левобережная', 'url' => ['schedule-levoberezhnaya-1/index']],
            ['label' => 'Лукяновка', 'url' => ['schedule-lukianovka-1/index']],
           // ['label' => 'Прайс', 'url' => ['price/index']],
           // ['label' => 'Контакты', 'url' => ['contact/index']],
           //['label' => 'Стоимость', 'url' => ['price/index']],
            //['label' => 'Филиалы', 'url' => ['filialy/index']],
            //['label' => 'Контакты', 'url' => ['contacts/index']],

        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
