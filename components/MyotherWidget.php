<?php
/**
 * Created by PhpStorm.
 * User: Efimov.Maksim
 * Date: 30.08.2016
 * Time: 14:16
 * @var $content string
 */
namespace app\components;

use yii\base\Widget;

class MyotherWidget extends Widget{


    public function init(){
        parent::init();
        ob_start();



    }
    public function run(){
        $content = ob_get_clean();

        return $this->render('myother',['content' => $content]);

    }
}