<?php
/**
 * Created by PhpStorm.
 * User: Efimov.Maksim
 * Date: 30.08.2016
 * Time: 10:50
 */



/* @var $this \yii\web\View */
/* @var $content string */
use app\assets\AppAsset;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <title><?= Yii::$app->name ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <p>Header</p>
        <?= $content ?>

        <footer class="footer">
            <p>Footer</p>
        </footer>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
