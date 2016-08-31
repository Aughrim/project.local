<?php
/**
 * Created by PhpStorm.
 * User: Efimov.Maksim
 * Date: 30.08.2016
 * Time: 10:50
 */



/* @var $this \yii\web\View */
/* @var $content string */
?>


<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <title><?= Yii::$app->name ?></title>
    </head>
    <body>

        <p>Header</p>
        <?= $content ?>

        <footer class="footer">
            <p>Footer</p>
        </footer>


    </body>
</html>

