<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kemdikbud\to\models\Baseline;
use kemdikbud\to\models\Outputbaseline;
use wbraganca\dynamicform\DynamicFormWidget;

/* @var $this yii\web\View */
/* @var $model kemdikbud\to\models\Outputbaseline */
/* @var $form yii\widgets\ActiveForm */

/* Script condition untuk Dropdown
 * Form output hanya 1 untuk tiap target
 * Ketika format form sudah dibuat maka tidak bisa dibuat form lagi
 */

    $arraybaseline                  = Outputbaseline::find()->select('id_base_line')->indexBy('id_base_line')->column();
    $arraybaselinesudahselesai      = [];
    foreach ($arraybaseline as $key => $value) {
        $arraybaselinesudahselesai[':'.$key] = $value;
    }
    
    $stringcondition                = '';
    $urutan_index                   = 0;
    foreach ($arraybaselinesudahselesai as $key => $value) {
        $urutan_index++;
        if ($urutan_index !== count($arraybaselinesudahselesai)) {
            $stringcondition        .= 'id != '.$key.' and ';
        }else{
            $stringcondition        .= 'id != '.$key;
        }        
    }

/* Script condition untuk Dropdown
 * Form output hanya 1 untuk tiap target
 * Ketika format form sudah dibuat maka tidak bisa dibuat form lagi
 */

?>
<script src="jquery-latest.min.js" type="text/javascript"></script>
<div class="outputbaseline-form">

    <?php $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>

    <?= $form->field($model, 'id_base_line')->dropDownList(ArrayHelper::map(Baseline::find()->where($stringcondition, $arraybaselinesudahselesai)->all(), 'id', 'uraian')) ?>

    <!-- Data global Form -->

    <?php DynamicFormWidget::begin([
        'widgetContainer' => 'dynamicform_wrapper_template', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
        'widgetBody' => '.container-items-template', // required: css class selector
        'widgetItem' => '.item-template', // required: css class
        'limit' => 20, // the maximum times, an element can be added (default 999)
        'min' => 0, // 0 or 1 (default 1)
        'insertButton' => '.add-item-template', // css class
        'deleteButton' => '.remove-item-template', // css class
        'model' => $template[0],
        'formId' => 'dynamic-form',
        'formFields' => [
            'id',
        ],
    ]); ?>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>
                <i class="glyphicon glyphicon-user"></i> Format tabel
                <button type="button" class="add-item-template btn btn-primary btn-sm pull-right"><i class="glyphicon glyphicon-plus"></i> Add</button>
            </h4>
        </div>
        <div class="panel-body">
            <div class="container-items-template"><!-- widgetBody -->
            <?php foreach ($template as $i => $tmp): ?>
                <div class="item-template panel panel-default"><!-- widgetItem -->
                    <div class="panel-heading">
                        <h3 class="panel-title pull-left">Kolom</h3>
                        <div class="pull-right">
                            <button type="button" class="remove-item-template btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <?php
                            // necessary for update action.
                            if (! $tmp->isNewRecord) {
                                echo Html::activeHiddenInput($tmp, "[{$i}]id");
                            }
                        ?>

                        <div class="row">
                            <div class="col-sm-4">
                                <?= $form->field($tmp, "[{$i}]column_name")->textInput() ?>
                            </div>
                            <div class="col-sm-4">
                                <?= $form->field($tmp, "[{$i}]column_type")->dropDownList([0=>'string', 1=> 'number'], ['prompt'=>'Pilih jenis data','id' => 'id']) ?>
                            </div>
                            <div class="col-sm-4">
                                <?= $form->field($tmp, "[{$i}]required")->dropDownList([0=>'Required', 1=> 'Not Required'], ['prompt'=>'Pilih kebutuhan data','id' => 'id']) ?>
                            </div>
                        </div><!-- .row -->

                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div><!-- .panel -->
    <?php DynamicFormWidget::end(); ?>

    <!-- Data global Form -->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
