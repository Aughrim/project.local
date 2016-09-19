<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\Modal;
use yii\widgets\DetailView;

$this->title = 'Обо мне';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="picture-view">

        <?= $model->comment; ?>


    </div>
   // <code><?= __FILE__ ?></code>
</div>
<?php
Modal::begin([
    'header' => '<h2>Привет</h2>',
    'toggleButton' => ['label' => 'click me'],
]);

echo 'Say hello...';

Modal::end();