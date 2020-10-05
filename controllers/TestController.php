<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\EntryForm;

// Helper
use components\Helpers;
class TestController extends Controller
{
    public function actionHello($test = 'yagnik')
    {
        $test = new Helpers();
        $temp = $test->startsWith('yagnik');
        $param = Yii::$app->request->getQueryParams();
        echo '<pre>';print_r($param);echo '</pre>';exit();
        //return $this->render('about');
    }

    public function actionEntry()
    {
        $model = new EntryForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // valid data received in $model

            // do something meaningful here about $model ...
            return $this->render('/site/entry-confirm', ['model' => $model]);
        } else {
            // either the page is initially displayed or there is some validation error
            return $this->render('/site/entry', ['model' => $model,'name'=>'Yagnik','email'=>'yagnikdevani@gmail.com']);
        }
    }
}
