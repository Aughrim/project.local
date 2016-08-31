<?php
/**
 * Created by PhpStorm.
 * User: Efimov.Maksim
 * Date: 30.08.2016
 * Time: 14:16
 */
namespace app\components;

use yii\base\Widget;

class MylikeWidget extends Widget{

    public $a;
    public $b;
    public function init(){
        parent::init();
        if ($this->a === null){
            $this->a = 0;
        }
        if ($this->b === null){
            $this->b = 0;
        }

    }
    public function run(){
        $c = $this->a + $this->b;
        return $this->render('mylike', ['c' => $c]);

    }
}