<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel kemdikbud\to\models\RelasibaselinedenganoutputSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Relasibaselinedenganoutputs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="relasibaselinedenganoutput-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Relasibaselinedenganoutput', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_base_line',
            'id_output',
            'nama_tabel',
            'nama_kolom',
            // 'nama_kegiatan',
            // 'date_created',
            // 'date_updated',
            // 'approved:boolean',
            // 'date_approved',
            // 'id_user_created',
            // 'id_user_updated',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
