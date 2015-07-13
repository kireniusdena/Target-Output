<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model kemdikbud\to\models\Outputbaseline */

$this->title = 'Create Output';
$this->params['breadcrumbs'][] = ['label' => 'Output', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="outputbaseline-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'template' => (empty($template)) ? [new Templatetable] : $template
    ]) ?>

</div>
