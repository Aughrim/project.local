<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Picture */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Мои рисунки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="picture-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы хотите удалить эту запись?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'author',
            'date_create',
            'date_add',
            'comment',
            'link',
            'gallery',
            'link:image',
        ],
    ]) ?>

</div>
