<?php

namespace frontend\controllers;

class TestController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionTest1() {
        // echo 'ทดสอบ 1';
        $a = 3;
        $b = 5;
        $sum = $a + $b;

        $param=['sum' => $sum,'a'=>$a,'b'=>$b];
        
        return $this->render('Test1', $param);
        
        // return $this->render('Test1', ['sum' => $sum]);
        // return $this->render('Test1',(array'sum'=>$sum)); 
        
        
        
    }// จบ test 1
    
    public function actionTest2($name=NULL,$lname=null) {
        $info = "Your name is $name $lname";
        return $this->render('Test2', ['info'=>$info]);
    }

}
