<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model kemdikbud\to\models\Baseline */

$this->title = 'Buat Target';
$this->params['breadcrumbs'][] = ['label' => 'Target', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="baseline-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
