<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\components\CKEditorExt;
use iutbay\yii2kcfinder\KCFinder;

/* @var $this yii\web\View */
/* @var $model app\models\About */
/* @var $form yii\widgets\ActiveForm */

// kcfinder options
// http://kcfinder.sunhater.com/install#dynamic
$kcfOptions = array_merge(KCFinder::$kcfDefaultOptions, [
    'uploadURL' => Yii::getAlias('@web').'/upload',
    'access' => [
        'files' => [
            'upload' => true,
            'delete' => false,
            'copy' => false,
            'move' => false,
            'rename' => false,
        ],
        'dirs' => [
            'create' => true,
            'delete' => false,
            'rename' => false,
        ],
    ],
]);

// Set kcfinder session options
Yii::$app->session->set('KCFINDER', $kcfOptions);

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
