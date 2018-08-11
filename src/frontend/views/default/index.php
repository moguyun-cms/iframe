<?php

use moguyun\cms\iframe\common\models\Iframe;

$this->title = $model->title;
/* @var $model moguyun\cms\iframe\common\models\Iframe */
Yii::$app->view->registerMetaTag([
    'name' => 'keywords',
    'content' => $model->keywords
]);
Yii::$app->view->registerMetaTag([
    'name' => 'description',
    'content' => $model->description
]);
?>
<iframe
    src="<?= $model->url; ?>"
    frameborder="0"
    scrolling="no"
    aligen="center"
    seamless="seamless"
    style="margin: 0 auto;width:100%;margin-top:20px;min-height:<?= $model->height;?>px"
/>