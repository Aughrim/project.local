<?php
use app\components\CKEditorExt;
use yii\bootstrap\ActiveForm;


/* @var $model app\models\Picture */
/* @var $form yii\widgets\ActiveForm */

?>
<div class="picture-form">



    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data','charset' => 'windows-1251']]); ?>
    <?= $form->field($model, 'text')->widget(CKEditorExt::className(), [
        'options' => ['rows' => 6],
        'preset' => 'basic'
    ])
     ?>
    <?php ActiveForm::end(); ?>
</div>
