<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kemdikbud\to\models\Baselinewilayah */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="baselinewilayah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_wilayah')->textInput() ?>

    <?= $form->field($model, 'nama_wilayah')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
