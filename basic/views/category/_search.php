<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\CategorySearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="category-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'rating') ?>

    <?= $form->field($model, 'color') ?>

    <?= $form->field($model, 'sweet') ?>

    <?php // echo $form->field($model, 'country') ?>

    <?php // echo $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'degree') ?>

    <?php // echo $form->field($model, 'after_taste') ?>

    <?php // echo $form->field($model, 'snack') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'image') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
