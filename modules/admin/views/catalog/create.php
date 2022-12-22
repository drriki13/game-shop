<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Catalog $model */

$this->title = 'Добавление товара';
?>
<div class="catalog-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', ['model' => $model]) ?>

</div>
