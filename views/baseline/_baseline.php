<?php

$datawiki           = \kemdikbud\to\models\Outputbaseline::findOne(['id_base_line' => $model->id]);
if (empty($datawiki)) {
	$class_sintax 		= 'danger';
}elseif (!empty($datawiki)) {
	$class_sintax 		= 'default';
}


?>

<div class="col-sm-12 col-md-12">
	<div class="panel panel-<?= $class_sintax;?>">
		<div class="panel-heading">
			<div class="row">
				<div class="col-md-1">
					<center>
					<small>Kode</small><br>
					<b><?= $model->kode;?></b>
					</center>
				</div>
				<div class="col-md-7">
					<small>Kode</small><br>
					<b>
					<?php
						if (empty($datawiki)) {
							echo $model->uraian;
						}elseif (!empty($datawiki)) {
							echo '<a href="../outputbaseline/viewoutput?id='.$model->id.'" style="color: black;">'.$model->uraian.'</a>';
						}
					?>
					</b>
				</div>
				<div class="col-md-1">
					<center>
					<small>Vol</small><br>
					<b><?= $model->volume;?></b>
					</center>
				</div>
				<div class="col-md-2">
					<center>
					<small>Satuan</small><br>
					<b><?= $model->satuan;?></b>
					</center>
				</div>
				<div class="col-md-1">
					<center>
					<small>Output</small><br>
					<b> </b>
					</center>
				</div>
			</div>
		</div>
	</div>
</div>