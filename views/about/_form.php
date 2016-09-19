<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\components\CKEditorExt;

/* @var $this yii\web\View */
/* @var $model app\models\About */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-form">

    <?php $form = ActiveForm::begin(); ?>

    <?//= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'comment')->widget(CKEditorExt::className(), [
        'options' => ['rows' => 6],
        'preset' => 'full'
    ]) ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
