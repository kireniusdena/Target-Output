<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kemdikbud\to\models\Baselinejenis;

/* @var $this yii\web\View */
/* @var $model kemdikbud\to\models\Baseline */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="baseline-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'jenis')->DropDownList(ArrayHelper::map(Baselinejenis::find()->all(), 'id', 'nama_jenis')) ?>

    <?= $form->field($model, 'wilayah')->textInput() ?>

    <?= $form->field($model, 'kode')->textInput() ?>

    <?= $form->field($model, 'uraian')->textInput() ?>

    <?= $form->field($model, 'volume')->textInput() ?>

    <?= $form->field($model, 'satuan')->textInput() ?>

    <?= $form->field($model, 'harga_satuan')->textInput() ?>

    <?= $form->field($model, 'harga_total')->textInput() ?>

    <?= $form->field($model, 'tahun')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
