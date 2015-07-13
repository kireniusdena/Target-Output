<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kemdikbud\to\models\Baseline */
/* @var $form yii\widgets\ActiveForm */

$array_kolom    = json_decode($datawiki->nama_kolom_json, true);

?>

<div class="baseline-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php foreach ($array_kolom as $key => $value) {
        echo $form->field($model, $key)->textInput();
    }; ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Insert' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
