<?php
/**
 * @var yii\web\View $this
 * @var \app\models\CatalogSearch $model
 * @var \yii\data\ActiveDataProvider $dataProvider
 */

use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\Pjax;

$this->title = 'Список товаров'
?>

<div class="row">
    <div class="col-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <?= Html::encode($this->title) ?>
                <div class="card-action">
                    <a class="btn btn-success" href="/admin/catalog/create">Добавить</a>
                </div>
            </div>
            <div class="table-responsive">
                <?php
                Pjax::begin(['id' => 'pjax_container']);
                //        echo $this->render('_search', ['model' => $model]);

                echo GridView::widget([
                    'dataProvider' => $dataProvider,
                    'columns' => [
                        'id',
                        'title',
//                'desc:ntext',
                        'price',
                        'discount',
                        'genres',
                        // 'created_at',
                        // 'updated_at',

                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]);

                Pjax::end();
                ?>
            </div>
        </div>
    </div>
</div>