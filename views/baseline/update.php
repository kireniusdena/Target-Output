<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kemdikbud\to\models\Baseline */

$this->title = 'Update Baseline: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Baselines', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="baseline-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
