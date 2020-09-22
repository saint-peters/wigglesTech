<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * Pages controller
 */
class PagesController extends Controller
{
      public function actionHome()
    {
        return $this->render('home');
    }
      }
