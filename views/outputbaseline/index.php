<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel kemdikbud\to\models\OutputbaselineSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Output';
$this->params['breadcrumbs'][] = $this->title;
$this->params['breadcrumbs'][] = [
    'label' => 'Tahun ', 
    'template' => "<li style=\"float: right;\">{link}<select class=\"form-inline\" id=\"Tahun\" onclick=\"Changesession()\"><option value=\"2015\">2015</option><option value=\"2016\">2016</option><option value=\"2017\">2017</option><option value=\"2018\">2018</option><option value=\"2019\">2019</option></select></li>"
];
?>
<div class="outputbaseline-index">

    <p>
        <?= Html::a('<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>  Output', ['create'], ['class' => 'btn btn-success pull-right']) ?><br>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'id_base_line',
            'nama_tabel',
            'nama_kolom_array',
            'nama_kolom_json',
            'nama_class',
            'date_created',
            // 'id_user_created',
            // 'date_updated',
            // 'id_user_updated',
            'approved:boolean',
            // 'date_approved',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

<script type="text/javascript">

var element         = document.getElementById('Tahun');
element.value       = <?php echo Yii::$app->session['tahun'];?>;

function Changesession(){
    var element     = document.getElementById('Tahun');
    $.post( "../default/changesession", {'tahun': element.value}).done(function( data ) {
        location.reload();
    });
}

</script>