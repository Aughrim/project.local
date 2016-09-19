<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\About */

$this->title = 'Редактировать страницу Обо мне ';
$this->params['breadcrumbs'][] = ['label' => 'Обо мне', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="about-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
