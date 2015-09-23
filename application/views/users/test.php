<!DOCTYPE html>
<html>
  <head>
    <title>Trips</title>
    <style type="text/css">
      #container { background-image: url('http://flyinryan.co/sunset.png'); margin: 0px auto; }
      #wrapper { width: 970px; margin: 0px auto; color: white; }
      h1, p { display: inline-block; }
      #title { display: inline-block; }
      form { display: inline-block; }
      #header{
        width: 100%;
        height: 50px;
        font-family: Verdana;
        background-color: rgba(0,0,0,.3);
        color: white;
        /*opacity: 0.2; */
        padding-bottom: 20px;
        text-align: center;
        position: fixed;
      }
      #cart { float: right; color: white; text-decoration: none; margin: 20px 50px 0px 0px; }
      .description { border: 1px solid silver; display: inline-block; width: 600px; vertical-align: top; }
      .pics { width: 300px; height: 200px; background-color: black; opacity: .5; display: inline-block; margin-left: 30px; }
      #select { margin-left: 40px; }
      #content { font-family: verdana; padding-top: 100px;}
    </style>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUrqgqo3AkPxzn9xH5Rn97MC--bZJDGwk">
    </script>

    <script type="text/javascript">
      $(document).ready(function(){

      });
    </script>
  </head>
<?php
  if (empty($cities)) {
     // $error = array("<script type='text/javascript'>alert('Sorry, we do not service any destinations in that area');</script>" => "<script type='text/javascript'>alert('Sorry, we do not service any destinations in that area');</script>");
     // $this->load->view("users/index", $error);
    redirect('/');
   } else {
?>
  <body>
    <div id="container">
      <div id="header">

        <!-- Pull from AJAX response where they clicked -->
<?php
          if ($results['city_name'] == NULL){
            echo "<h2 id='title'>Destinations close to your click";
          } else {
            echo "<h2 id='title'>Destinations near " . $results['city_name'] . "</h2>";
          }
?>
        <!-- Cart link, ECHO number of items in cart -->
        <a id="cart" href="#">Cart (0)</a>

      </div>
    <div id="wrapper">

      <div id="content">
<?php

     foreach ($cities as $city){
?>
          <div class="display_city">
            <h2><?= $city['name'] ?></h2>Click 'n Bounce User Rating:
            <form id="select">
              <select>
                <option value="duration">Trip Duration</option>
                <option value="four_day">4 Days $599</option>
                <option value="ten_day">10 Days $1,199</option>
              </select>
              <select>
                <option value="Quantity">Quantity</option>
                <option value="onepack">1</option>
                <option value="twopack">2</option>
                <option value="threepack">3</option>
                <option value="fourpack">4</option>
                <option value="fivepack">5</option>
              </select>
              <input type="submit" value="Add to Cart">
            </form>
            <p class="description">
            <?= $city['description'] ?>
            </p>
            <div class="pics">
              Pictures
            </div>
          </div>
<?php
         }
?>


      </div>
    </div>
    </div>
  </body>
<?php } ?>
</html>
