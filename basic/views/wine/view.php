<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Wine $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Wines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="wine-view">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <?php if (!Yii::$app->user->isGuest and Yii::$app->user->identity->admin == 1): ?>
        <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Картинка', ['set-image', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?php endif ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'rating',
            'color',
            'sweet',
            'country',
            'type',
            'degree',
            'after_taste',
            'snack',
            'price',
            'image',
            'category_id',
        ],
    ]) ?>

</div>
