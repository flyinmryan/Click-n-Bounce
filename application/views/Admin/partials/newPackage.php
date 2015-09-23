<div class="row">
	<h3 class="col s6 offset-s3 white-text">Add A New Package</h3>
	<button class="btn hideAdd col s2 right white black-text">Hide</button>
</div>
<div class="row">
	<form method="post" action="" class="col s12" id="addNewProduct">
	  	<div class="row"> 
	  		<div class="input-field col s6">
	  			<input id="duration" name="duration" type="text" class="white-text">
	  			<label for="duration" class="white-text">Duration</label>
	  		</div>
	  		<div class="input-field col s6">
	  			<input id="price" name="price" type="text" class="white-text">
	  			<label for="price" class="white-text">Price</label>
	  		</div>
	  		<select name="city" class="browser-default col s12">
	  			<option value="" disabled selected>Pick a city</option>
<?php
				foreach ($cities as $city) {
?>
					<option value=<?= $city['id'] ?>><?= $city['name'] ?></option>
<?php
				}
?>	  			
	  		</select>
	  		<div class="input-field col s4 offset-s4">
	  			<button class="btn white black-text">Create New Package</button>
	  		</div>
	  	</div>
	</form>
</div>