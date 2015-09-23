    <div class="row">
      <h3 class="white-text col s6 offset-s4">Edit package #<?= $package['id'] ?></h3>
      <button class="btn white black-text hideEdit right">Hide</button>
    </div>
    <div class="row">
      <form method="post" action="" class="col s12" id="changePackage">
        <input type="hidden" name="packNum" value=<?= $package['id'] ?>>
        <div class="row">
          <div class="input-field col s6">
            <input id="duration" type="text" name="duration" class="white-text" value=<?= '"' . $package['duration'] . '"'?>>
            <label for="duration" class="white-text active">Duration</label>
          </div>
          <div class="input-field col s6">
            <input id="price" type="text" name="price" class="white-text" value=<?= '"' . $package['price'] . '"' ?>>
            <label for="price" class="white-text active">Price</label>
          </div>
          <div class="input-field col s8 offset-s2">
            <select class="browser-default" name="city">
<?php
              foreach ($cities as $city) {
?>
                <option 
<?php
                if ($city['id'] == $package['city_id']){
?>
                  selected="selected"
<?php
                }
?>
                value=<?= $city['id'] ?>><?= $city['name'] ?></option>
<?php
              }
?>
            </select>
          </div>
          <div class="input-field col s4 offset-s5">
            <button class="btn white black-text subEdit" type="submit">Save Changes</button>
          </div>
        </div>
      </form>
    </div>