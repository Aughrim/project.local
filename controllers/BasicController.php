<?php

namespace app\controllers;

class BasicController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $recall = 'echo basic page';
        return $this->render(
            'index',
        [
            'newcall' => $recall
        ]);
    }

}
