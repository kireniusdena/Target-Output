<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel kemdikbud\to\models\BaselinejenisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Baselinejenis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="baselinejenis-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Baselinejenis', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'kode_jenis',
            'nama_jenis',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
