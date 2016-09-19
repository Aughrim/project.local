<?php

use yii\helpers\Html;
use yii\jui\DatePicker;
use yii\bootstrap\ActiveForm;
use app\controllers\PictureController;



/* @var $this yii\web\View */
/* @var $model app\models\Picture */
/* @var $testmodel app\models\TestModel */
/* @var $form yii\widgets\ActiveForm */
/* @var $upload app\models\UploadFile */
/* @var $flag app\controllers\PictureController */


?>

<div class="picture-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data','charset' => 'windows-1251']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'placeholder' => 'Введите название картины'])->label('Название картины') ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true, 'placeholder' => 'Введите Имя автора'])->label('Имя автора') ?>

    <?= $form->field($model, 'comment')->textarea([ 'maxlength' => true, 'placeholder' => 'Введите краткое описание'])->label('Краткое описание') ?>

    <?= $form->field($model, 'gallery')->textInput(['maxlength' => true,  'placeholder' => 'Выберите галлерею'])->label('Галлерея') ?>

    <h3><?= $testmodel->namemodel ?></h3>
    <?= \kato\DropZone::widget([
    'options' => [
    'url' => 'index.php?r=picture/upload',
    'maxFilesize' => '2',
    //'createImageThumbnails' => true,
    'maxFiles' => '1',
    'acceptedFiles' => '.jpg, .png',
    'dictInvalidFileType' => 'Вы можете загрузить только изображения в формате JPG, PNG',
    'dictDefaultMessage' => 'Переместите сюда файл для загрузки',
    'dictMaxFilesExceeded' => 'Может быть загружен только 1 файл',
    ],
    'clientEvents' => [
    'complete' => "function(file){console.log(file)}",
    'success' => "function(file){jQuery('#tag').attr('value','/uploads/'+file.name);}",
     ],
    ]);
    ?>

    <?= $form->field($model, 'date_create')->widget(\yii\jui\DatePicker::classname(),['dateFormat' => 'yyyy-MM-dd', 'language' => 'ru',  ])->textInput(['maxlength' => true, 'placeholder' => 'Выберите дату создания'])->label('Дата создания')?>
    <?php
    $date = new DateTime();
   // echo $date->format('Y-m-d');
    ?>
    <?= $form->field($model, 'date_add')->widget(\yii\jui\DatePicker::classname(),['dateFormat' => 'yyyy-MM-dd', 'language' => 'ru',])->textInput(['maxlength' => true, 'placeholder' => 'Выберите дату публикации' ,'value' => $date->format('Y-m-d')])->label('Дата публикации') ?>

    <?= $form->field($model, 'link')->textInput(['id' => 'tag', 'type' => 'hidden', 'value' =>'', 'maxlength' => true] ) ?>




    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary' ]) ?>
    </div>

    <?php ActiveForm::end(); ?>


</div>
