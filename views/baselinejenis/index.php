<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel kemdikbud\to\models\BaselinejenisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jenis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="baselinejenis-index">

    <p>
        <?= Html::a('<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Jenis', ['create'], ['class' => 'btn btn-success pull-right']) ?>
    </p><br>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'kode_jenis',
            'nama_jenis',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
