<?php

namespace moguyun\cms\iframe\frontend\controllers;

use yii\web\Controller;
use moguyun\cms\iframe\common\models\Iframe;
use yii\web\NotFoundHttpException;

class DefaultController extends Controller
{
    public function actionIndex($slug)
    {
        $model = $this->findModel($slug);
        return $this->render('index', [
            'model' => $model
        ]);
    }

    private function findModel($slug)
    {
        if (($model = Iframe::find()->where(['slug' => $slug])->one()) == null) {
            throw new NotFoundHttpException('页面不存在');
        }
        return $model;
    }
}