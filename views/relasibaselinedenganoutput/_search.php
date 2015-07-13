<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kemdikbud\to\models\RelasibaselinedenganoutputSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="relasibaselinedenganoutput-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_base_line') ?>

    <?= $form->field($model, 'id_output') ?>

    <?= $form->field($model, 'nama_tabel') ?>

    <?= $form->field($model, 'nama_kolom') ?>

    <?php // echo $form->field($model, 'nama_kegiatan') ?>

    <?php // echo $form->field($model, 'date_created') ?>

    <?php // echo $form->field($model, 'date_updated') ?>

    <?php // echo $form->field($model, 'approved')->checkbox() ?>

    <?php // echo $form->field($model, 'date_approved') ?>

    <?php // echo $form->field($model, 'id_user_created') ?>

    <?php // echo $form->field($model, 'id_user_updated') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
