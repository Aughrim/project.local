<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
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
        'brandLabel' => 'На главную',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' =>  'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Главная', 'url' => ['/site/index']],
            ['label' => 'Обо мне', 'url' => ['/site/about']],
            ['label' => 'Контакты', 'url' => ['/site/contact']],
            ['label' => 'Управление',
                'items' => [
                    ['label' => 'Фотогалерея', 'url' => ['/picture/index']],
                    '<li class="divider"></li>',
                    ['label' => 'Обо мне', 'url' =>Url::to (['about/update', 'id' =>100])],
                    '<li class="divider"></li>',
                    ['label' => 'Контакты', 'url' => ['/site/admin']],
                ], 'visible' => Yii::$app->user->id =='100',
            ],
            Yii::$app->user->isGuest ? (
                ['label' => 'Войти', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                . Html::submitButton(
                    'Выйти (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link']
                )
                . Html::endForm()
                . '</li>'
            )
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
        <p class="pull-left">&copy; ДеревенщинаStyle <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
