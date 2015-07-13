<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel kemdikbud\to\models\BaselinewilayahSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Baselinewilayahs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="baselinewilayah-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Baselinewilayah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'kode_wilayah',
            'nama_wilayah',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
