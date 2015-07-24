<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kemdikbud\to\models\Baselinejenis;
use kartik\money\MaskMoney;

/* @var $this yii\web\View */
/* @var $model kemdikbud\to\models\Baseline */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="baseline-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">UPT</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'jenis')->DropDownList(ArrayHelper::map(Baselinejenis::find()->all(), 'id', 'nama_jenis')) ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'wilayah')->textInput() ?>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Deskripsi</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-2">
                    <?= $form->field($model, 'kode')->textInput() ?>
                </div>
                <div class="col-md-10">
                    <?= $form->field($model, 'uraian')->textInput() ?>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Keterangan</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-1">
                    <?= $form->field($model, 'volume')->textInput() ?>
                </div>
                <div class="col-md-3">
                    <?= $form->field($model, 'satuan')->textInput() ?>
                </div>
                <div class="col-md-3">
                    
                    <?php echo $form->field($model, 'harga_satuan')->widget(MaskMoney::classname(), [
                        'pluginOptions' => [
                            'prefix' => 'Rp. ',
                            'suffix' => '',
                            'allowNegative' => false
                        ]
                    ]);?>

                </div>
                <div class="col-md-3">

                    <?php echo $form->field($model, 'harga_total')->widget(MaskMoney::classname(), [
                        'pluginOptions' => [
                            'prefix' => 'Rp. ',
                            'suffix' => '',
                            'allowNegative' => false
                        ]
                    ]);?>
                    
                </div>
                <div class="col-md-2">
                    <?= $form->field($model, 'tahun')->DropDownList([2015=>2015, 2016=>2016, 2017=>2017, 2018=>2018, 2019=>2019]) ?>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Buat Target' : 'Ubah Target', ['class' => $model->isNewRecord ? 'btn btn-success pull-right' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
