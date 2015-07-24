<?php

namespace kemdikbud\to\controllers;

use Yii;
use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
    	if (empty(Yii::$app->session['tahun'])) {
    		Yii::$app->session['tahun'] = 2015;
    	}

        if (empty(Yii::$app->session['upt'])) {
            Yii::$app->session['upt'] = 1;
        }
    	
        return $this->render('index');
    }

    public function actionChangesession(){
        Yii::$app->session['tahun'] = $_POST['tahun'];
    }

    public function actionChangesessiontahun(){
    	Yii::$app->session['tahun'] = $_POST['tahun'];
    }

    public function actionChangesessionupt(){
        Yii::$app->session['upt'] = $_POST['upt'];
    }
}
