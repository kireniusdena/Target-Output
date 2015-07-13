<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kemdikbud\to\models\Baselinewilayah */

$this->title = 'Update Baselinewilayah: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Baselinewilayahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="baselinewilayah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
