<?php

namespace frontend\controllers;

class PortfolioController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
