<?php

namespace app\controllers;

use yii\web\Controller;

class CatalogController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
