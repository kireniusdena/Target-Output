<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kemdikbud\to\models\Relasibaselinedenganoutput */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="relasibaselinedenganoutput-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_base_line')->textInput() ?>

    <?= $form->field($model, 'id_output')->textInput() ?>

    <?= $form->field($model, 'nama_tabel')->textInput() ?>

    <?= $form->field($model, 'nama_kolom')->textInput() ?>

    <?= $form->field($model, 'nama_kegiatan')->textInput() ?>

    <?= $form->field($model, 'date_created')->textInput() ?>

    <?= $form->field($model, 'date_updated')->textInput() ?>

    <?= $form->field($model, 'approved')->checkbox() ?>

    <?= $form->field($model, 'date_approved')->textInput() ?>

    <?= $form->field($model, 'id_user_created')->textInput() ?>

    <?= $form->field($model, 'id_user_updated')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
