<table class="table table-striped">
	
	<thead>

		<tr>
			<?php
				foreach ($model as $key => $value) {
					echo "<th>".$key."</th>";
				}
			?>
		</tr>
	</thead>

	<tbody>
		<tr>
			<?php
				foreach ($model as $key => $value) {
					echo "<th>".$value."</th>";
				}
			?>
		</tr>
	<tbody>

</table>