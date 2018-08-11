<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Iframe */

$this->title = 'Create Iframe';
$this->params['breadcrumbs'][] = ['label' => 'Iframes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="iframe-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
