<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Iframe */

$this->title = 'Update Iframe: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Iframes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="iframe-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
