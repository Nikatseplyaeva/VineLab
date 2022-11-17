<?php

use app\models\Wine;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\WineSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Вина';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wine-index">

    <h1><?= Html::encode($this->title) ?></h1>
 
        
    <?php if (!Yii::$app->user->isGuest and Yii::$app->user->identity->admin == 1): ?>
    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php endif ?>

    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
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
            [
                'format' => 'html',
                'label' => 'Image',
                'value' => function($data) {
                    return Html::img($data->getImage(), ['width'=>300]);
                }
            ],
            //'image',
            //'category_id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Wine $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
