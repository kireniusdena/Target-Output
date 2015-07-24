<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\helpers\ArrayHelper;
use kartik\grid\GridView;
use kartik\datecontrol\DateControl;
/* @var $this yii\web\View */
/* @var $searchModel kemdikbud\to\models\BaselineSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Target';
$this->params['breadcrumbs'][] = $this->title;
$this->params['breadcrumbs'][] = [
    'label' => 'UPT ', 
    'template' => "<li>{link}<select class=\"form-inline\" id=\"Upt\" onclick=\"Changesessionupt()\"><option value=\"1\">PKP</option><option value=\"2\">PCBM</option><option value=\"3\">INDB</option><option value=\"4\">BPNB</option><option value=\"5\">SETDITJEN</option><option value=\"6\">GALNAS</option><option value=\"7\">Museum</option><option value=\"8\">PKT</option><option value=\"9\">BPCB dan BKP</option><option value=\"10\">SNB</option></select></li>"
];
$this->params['breadcrumbs'][] = [
    'label' => 'Tahun ', 
    'template' => "<li>{link}<select class=\"form-inline\" id=\"Tahun\" onclick=\"Changesessiontahun()\"><option value=\"2015\">2015</option><option value=\"2016\">2016</option><option value=\"2017\">2017</option><option value=\"2018\">2018</option><option value=\"2019\">2019</option></select></li>"
];
?>
<div class="baseline-index">

    <div class="col-md-12">
        <div class="col-md-3">
            <i style="width: 18px;height: 18px;float: left;margin-right: 8px;opacity: 0.7;border-style: solid;border-width:2px;border-color:rgb(252, 128, 128);background:rgb(236, 163, 163);"> </i> Format Output belum dibuat
        </div>
        <div class="col-md-3">
            <i style="width: 18px;height: 18px;float: left;margin-right: 8px;opacity: 0.7;border-style: solid;border-width:2px;border-color:rgb(197, 197, 197);background:rgb(226, 226, 226);"> </i> Output dalam proses
        </div>
        <div class="col-md-3">
            <i style="width: 18px;height: 18px;float: left;margin-right: 8px;opacity: 0.7;border-style: solid;border-width:2px;border-color:rgb(13, 94, 165);background:rgb(33, 117, 189);"> </i> Laporan Output 6udah selesai
        </div>
        <div class="col-md-3">
            <?= Html::a('<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Target', ['create'], ['class' => 'btn btn-success pull-right']) ?>
        </div>
    </div><br><br>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_baseline',
        'layout' => '{items}{pager}',
        'itemOptions' => ['class' => 'item'],
    ]) ?>

</div>

<script type="text/javascript">

var element         = document.getElementById('Upt');
element.value       = <?php echo Yii::$app->session['upt'];?>;

var element         = document.getElementById('Tahun');
element.value       = <?php echo Yii::$app->session['tahun'];?>;

function Changesessionupt(){
    var element     = document.getElementById('Upt');
    $.post( "../default/changesessionupt", {'upt': element.value}).done(function( data ) {
        location.reload();
    });
}

function Changesessiontahun(){
    var element     = document.getElementById('Tahun');
    $.post( "../default/changesessiontahun", {'tahun': element.value}).done(function( data ) {
        location.reload();
    });
}

</script>