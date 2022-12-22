<?php

namespace app\modules\admin\controllers;

use app\models\Catalog;
use app\models\CatalogSearch;
use Yii;
use yii\helpers\Url;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\Response;

class CatalogController extends Controller
{
    /**
     * @throws BadRequestHttpException
     */
    public function beforeAction($action): bool
    {
        $this->layout = 'main';
        return parent::beforeAction($action);
    }

    public function actionIndex(): string
    {
        $searchModel = new CatalogSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', ['model' => $searchModel, 'dataProvider' => $dataProvider]);
    }

    public function actionCreate(): Response|string
    {
        $model = new Catalog();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(Url::to(['/admin/catalog/index']));
        }

        return $this->render('create', ['model' => $model]);
    }

    public function actionUpdate($id): Response|string
    {
        $model = Catalog::findOne($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(Url::to(['/admin/catalog/index']));
        }

        return $this->render('update', ['model' => $model]);
    }

    public function actionDelete($id): Response
    {
        Catalog::findOne($id)->delete();
        return $this->redirect(Url::to(['/admin/catalog/index']));
    }
}