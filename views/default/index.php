<?php
$this->title = 'Target Output';
$this->params['breadcrumbs'][] = [
    'label' => 'Tahun ', 
    'template' => "<li style=\"float: right;\">{link}<select class=\"form-inline\" id=\"Tahun\" onclick=\"Changesession()\"><option value=\"2015\">2015</option><option value=\"2016\">2016</option><option value=\"2017\">2017</option><option value=\"2018\">2018</option><option value=\"2019\">2019</option></select></li>"
];
?>

<div class="to-default-index">
    
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