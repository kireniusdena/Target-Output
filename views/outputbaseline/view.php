<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model kemdikbud\to\models\Outputbaseline */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Outputbaselines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="outputbaseline-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_base_line',
            'nama_tabel',
            //'nama_kolom',
            //'nama_kegiatan',
            'date_created',
            'id_user_created',
            'date_updated',
            'id_user_updated',
            'approved:boolean',
            'date_approved',
        ],
    ]) ?>

</div>
