<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model kemdikbud\to\models\Baseline */

$this->title = 'Create Baseline';
$this->params['breadcrumbs'][] = ['label' => 'Baselines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="baseline-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
