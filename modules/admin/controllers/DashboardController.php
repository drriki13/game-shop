<?php

namespace app\modules\admin\controllers;

use yii\web\BadRequestHttpException;
use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class DashboardController extends Controller
{
    /**
     * @throws BadRequestHttpException
     */
    public function beforeAction($action): bool
    {
        $this->layout = 'main';
        return parent::beforeAction($action);
    }

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $this->view->title = 'Dashboard';
        return $this->render('index');
    }
}
