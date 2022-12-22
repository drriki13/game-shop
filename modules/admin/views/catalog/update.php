<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Catalog $model */

$this->title = 'Редактирование товара: ' . $model->title;
?>
<div class="catalog-update">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', ['model' => $model]) ?>

</div>
