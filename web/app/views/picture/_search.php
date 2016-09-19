<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PictureSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="picture-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'author') ?>

    <?= $form->field($model, 'date_create') ?>

    <?= $form->field($model, 'date_add') ?>

    <?php // echo $form->field($model, 'comment') ?>

    <?php // echo $form->field($model, 'link') ?>

    <?php // echo $form->field($model, 'gallery') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
