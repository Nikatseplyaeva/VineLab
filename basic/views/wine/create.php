<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Wine $model */

$this->title = 'Создание вина';
$this->params['breadcrumbs'][] = ['label' => 'Wines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wine-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
