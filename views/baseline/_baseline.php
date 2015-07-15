<?php

use yii\helpers\Html;

/* Script condition untuk status target
 * Merah = Belum ada form | abu-abu = dalam proses | Biru proses complite
 */
$datawiki           = \kemdikbud\to\models\Outputbaseline::findOne(['id_base_line' => $model->id]);
if (empty($datawiki)) {
	$class_sintax 		= 'danger';
}elseif (!empty($datawiki)) {
	$class_sintax 		= 'default';
}
/* Script condition untuk status target
 * Merah = Belum ada form | abu-abu = dalam proses | Biru proses complite
 */

/* Script untuk count output target */
$arraybaselinesudahselesai  = \kemdikbud\to\models\Outputbaseline::findone(['id_base_line'=>$model->id]);
if ($arraybaselinesudahselesai['nama_class']) {
	$class_name 				= '\kemdikbud\to\models\\'.ucfirst($arraybaselinesudahselesai['nama_class']);
	$count 						= $class_name::find()->count();
}else{
	$count 						= '-';
}

/* Script untuk count output target */
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
				<div class="col-md-6">
					<small>Uraian</small><br>
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
					<b><?= $count;?></b>
					</center>
				</div>
				<div class="col-md-1">
					<center>
					<small>Pengaturan</small><br>
						<!-- button control -->
						<div class="btn-group">
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								Aksi <span class="caret"></span>
							</button>

							<ul class="dropdown-menu" role="menu">
								<center><li><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Detail</li></center>
								<li class="divider"></li>
								<center><li><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Ubah</li></center>
								<li class="divider"></li>
								<center><li><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus</a></li></center>
							</ul>
	                    </div>
	                    <!-- button control -->
					</center>
				</div>
			</div>
		</div>
	</div>
</div>