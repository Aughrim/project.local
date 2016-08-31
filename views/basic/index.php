<?php
/* @var $this yii\web\View */
/* @var $newcall string */
use app\components\MylikeWidget;
use app\components\MyotherWidget;
use yii\bootstrap\Modal;
use app\assets\AppAsset;
AppAsset::register($this);
?>



    <h1>basic/index</h1>

<?= MylikeWidget::widget(['a'=>35,'b'=>35,]);?>
<?php MyotherWidget::begin();?>

КРАСНЫЙ

<?php MyotherWidget::end();?>
<p>
    <?= $newcall ?>
</p>
<?php
Modal::begin([
'header' => '<h2>Привет</h2>',
'toggleButton' => ['label' => 'click me'],
]);

echo 'Say hello...';

Modal::end();
?>