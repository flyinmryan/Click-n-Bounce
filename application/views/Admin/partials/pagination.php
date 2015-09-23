	<ul class="pagination col s7 offset-s3">
		<li 
<?php
		if ($current == 1) {
?>
			class="disabled"
<?php
		}
?>
		><a value=<?= '"' . ($current - 1) . '"' ?> href=""><i class="material-icons">chevron_left</i></a></li>

<?php
		for ($i=1; $i <= ceil(count($packages)/10); $i++) { 
?>
			<li
<?php			
			if ($current == $i){
?>
				class="active grey"
<?php
			}
?>
			><a value=<?= '"' . $i . '"' ?> href="" ><?= $i ?></a></li>
<?php
		}
?>
		<li
<?php
		if($current == ceil(count($packages)/10)){
?>
		class="disabled"
<?php
		}
?>
		><a value=<?= '"' . ($current + 1) . '"' ?> href=""><i class="material-icons">chevron_right</i></a></li>
	</ul>