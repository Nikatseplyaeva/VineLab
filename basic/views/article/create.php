<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Article $model */

$this->title = 'Создание поста';
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>