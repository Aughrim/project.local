<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Picture */

$this->title = 'Редактировать запись: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Мои рисунки', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="picture-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
