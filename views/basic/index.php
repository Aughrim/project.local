<?php
/* @var $this yii\web\View */
/* @var $newcall string */
use app\components\MylikeWidget;
use app\components\MyotherWidget;
use yii\bootstrap\Modal;

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
    'header' => '<h2>Вот это модальное окно!</h2>',
    'toggleButton' => [
        'tag' => 'button',
        'class' => 'btn btn-lg btn-block btn-info',
        'label' => 'Нажмите здесь, забавная штука!',
    ]
]);
echo 'Надо взять на вооружение.';
Modal::end();
?>