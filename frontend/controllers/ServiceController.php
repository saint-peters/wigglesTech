<?php

namespace frontend\controllers;

class ServiceController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
     public function actionService()
    {
        return $this->render('service');
    }
}
