<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model kemdikbud\to\models\Baselinejenis */

$this->title = 'Create Baselinejenis';
$this->params['breadcrumbs'][] = ['label' => 'Baselinejenis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="baselinejenis-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
