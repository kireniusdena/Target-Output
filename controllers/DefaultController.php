<?php

namespace kemdikbud\to\controllers;

use Yii;
use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
    	if (empty(Yii::$app->session['tahun'])) {
    		Yii::$app->session['tahun'] = 2019;
    	}
    	
        return $this->render('index');
    }

    public function actionChangesession(){
    	Yii::$app->session['tahun'] = $_POST['tahun'];
    }
}
