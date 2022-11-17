<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Wine $model */

$this->title = 'Обновить вино: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Wines', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wine-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
