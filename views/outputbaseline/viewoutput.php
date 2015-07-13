<?php
use yii\helpers\Html;
use yii\widgets\ListView;

$this->title = $data->kode . ' - ' . $data->uraian;
$this->params['breadcrumbs'][] = 'Output';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="col-sm-12 col-md-12">
	<div class="panel-footer">
		<div class="row">
			<div class="col-md-1">
				<center>
				<small>Kode</small><br>
				<b><?= $data->kode;?></b>
				</center>
			</div>
			<div class="col-md-9">
				<small>Uraian</small><br>
				<b><?= $data->uraian;?></b>
			</div>
			<div class="col-md-1">
				<center>
				<small>Vol</small><br>
				<b><?= $data->volume;?></b>
				</center>
			</div>
			<div class="col-md-1">
				<center>
				<small>Satuan</small><br>
				<b><?= $data->satuan;?></b>
				</center>
			</div>
		</div>
	</div>
</div><br><br>
<br><br>
<?= Html::a('<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Output', ['insertoutput', 'id' => $data->id], ['class' => 'btn btn-success pull-right']) ?>
<br><br>
<?= ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_output',
    'layout' => '{items}{pager}',
    'itemOptions' => ['class' => 'item'],
]) ?>