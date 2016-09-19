<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Picture */
/* @var $testmodel app\models\TestModel */
/* @var $flag app\controllers\PictureController */
/* @var $upload app\models\UploadFile */


$this->title = 'Добавить изображение';
$this->params['breadcrumbs'][] = ['label' => 'Фотогалерея', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="picture-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'testmodel' => $testmodel,

    ]) ?>




<?= yii::$app->basePath ?>



</div>
