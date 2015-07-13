<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model kemdikbud\to\models\Relasibaselinedenganoutput */

$this->title = 'Create Relasibaselinedenganoutput';
$this->params['breadcrumbs'][] = ['label' => 'Relasibaselinedenganoutputs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="relasibaselinedenganoutput-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
