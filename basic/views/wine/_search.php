<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Wine;

/** @var yii\web\View $this */
/** @var app\models\WineSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="wine-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php if (!Yii::$app->user->isGuest and Yii::$app->user->identity->admin == 1): ?>
    <?= $form->field($model, 'id') ?>
    <?php endif ?>
    
    <?php
    $items[0] = '$params';
    $Wine = Wine::find()->all();
    $items = ArrayHelper::map($Wine,'title','title');
    $params = [
        'prompt' => 'Выберите название...'
    ];
    echo $form->field($model, 'title')->dropDownList($items,$params);
    ?>
    <?php
    $Wine = Wine::find()->all();
    $items = ArrayHelper::map($Wine,'rating','rating');
    $params = [
        'prompt' => 'Выберите рейтинг...'
    ];
    echo $form->field($model, 'rating')->dropDownList($items,$params);
    ?>
    <?php
    $Wine = Wine::find()->all();
    $items = ArrayHelper::map($Wine,'color','color');
    $params = [
        'prompt' => 'Выберите цвет...'
    ];
    echo $form->field($model, 'color')->dropDownList($items,$params);
    ?>
    <?php
    $Wine = Wine::find()->all();
    $items = ArrayHelper::map($Wine,'sweet','sweet');
    $params = [
        'prompt' => 'Выберите вкус...'
    ];
    echo $form->field($model, 'sweet')->dropDownList($items,$params);
    ?>
    <?php
    $Wine = Wine::find()->all();
    $items = ArrayHelper::map($Wine,'country','country');
    $params = [
        'prompt' => 'Выберите страну...'
    ];
    echo $form->field($model, 'country')->dropDownList($items,$params);
    ?>
    <?php
    $Wine = Wine::find()->all();
    $items = ArrayHelper::map($Wine,'type','type');
    $params = [
        'prompt' => 'Выберите сорт...'
    ];
    echo $form->field($model, 'type')->dropDownList($items,$params);
    ?>
    <?php
    $Wine = Wine::find()->all();
    $items = ArrayHelper::map($Wine,'degree','degree');
    $params = [
        'prompt' => 'Выберите градус...'
    ];
    echo $form->field($model, 'degree')->dropDownList($items,$params);
    ?>
    <?php
    $Wine = Wine::find()->all();
    $items = ArrayHelper::map($Wine,'after_taste','after_taste');
    $params = [
        'prompt' => 'Выберите послевкусие...'
    ];
    echo $form->field($model, 'after_taste')->dropDownList($items,$params);
    ?>
    <?php
    $Wine = Wine::find()->all();
    $items = ArrayHelper::map($Wine,'snack','snack');
    $params = [
        'prompt' => 'Выберите закуску...'
    ];
    echo $form->field($model, 'snack')->dropDownList($items,$params);
    ?>
    <?php
    $Wine = Wine::find()->all();
    $items = ArrayHelper::map($Wine,'price','price');
    $params = [
        'prompt' => 'Выберите цену...'
    ];
    echo $form->field($model, 'price')->dropDownList($items,$params);
    ?>



    <div class="form-group">
        <?= Html::submitButton('Искать', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Сбросить', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
