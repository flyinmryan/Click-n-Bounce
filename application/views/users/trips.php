<!DOCTYPE html>
<html>
<head>
  <title>Trips</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">


  <style type="text/css">
  body {
    background: #000 url(../images/body_bg_new.jpg) repeat fixed center top;
    background-image: url(http://www.css3maker.com/images/body_bg_new.jpg);
    background-position-x: 50%;
    background-position-y: 0%;
    background-size: initial;
    background-repeat-x: repeat;
    background-repeat-y: repeat;
    background-attachment: fixed;
    background-origin: initial;
    background-clip: initial;
    background-color: rgb(0, 0, 0);
    color: white;
  }
  h4{
    padding: 10px 20px;
  }
  #content {
    width: 1000px;
    text-align: center;
    margin: 0px auto;
  }
  #wrapper{
    margin: 0px auto;
  }

  #rating, h5 {
    display: inline-block;
  }


  #igimage{
    margin:4px;
    display: inline-block;
  }

  #span{
    color:blue;
  }

  #addcart{
    margin-left: 0px;
    margin-top: 35px;
  }

  #dropdown, .a.dropdown-button.btn{
    width: 200px;
  }

  #dropdown
  {
    margin-top: 35px;
    text-align: center;
    padding: 0px;
  }

  .descr
  {
    display: inline-block;
    width: 300px;
    font-size: 18px;
    text-align: left;
  }

  .large.material.-icons{
    display: inline;
  }


  .div.col.s3
  {
    width:200px;
    padding-left: 10px;
  }

  .i.medium.material.icons
  {
    /*color: #2BBBAD;*/
    margin-top: 35px;
  }
  .city{
    margin-top: 30px;
    color: white;
    margin-bottom: 30px;
    border-bottom: 50px;
  }
  p
  {
    margin: 5px 20px;
  }
  img {
    height: 200px;
    width: 200px;
    padding: 0px;
    margin: 0px;
  }
  .pics {
    width: 680px;
    float: right;
    display: inline-block;
  }
  #title {
    margin: 0px auto;
    text-align: center;
  }
  .city_title {
    border-top: 3px solid black;
    border-bottom: 3px solid black;
  }
  #addcart{
    background-color: hotpink;
    color: white;
    height: 38px;
    width: 200px;
    /*  position: relative;
      bottom: 50px;
      left: 230px;*/
    }
    #quantity{
      margin-top: 35px;
      text-align: center;
      display: inline-block;
   /*   position: relative;
      top: 45px;
      right: 265px;*/
    }
    #return{
      text-decoration: none;
      text-align: center;
      color: white;
      margin: 0px auto;
    }
    #footer a:hover {
      color: orange;
    }
    #footer a {
      color: white;
      text-decoration: none;
      text-align: center;
    }
    #footer{
      margin-top: 40px;
    }
    #content a:hover {
      color: orange;
    }
    #content a {
      color: white;
      text-decoration: none;
      text-align: center;
    }
    </style>

  </head>
  <?php
  if (empty($cities)) {
    redirect('/');
  } else {
    ?>
    <body>
      <div id="wrapper">
        <?php
        if ($results['city_name'] == NULL){
          echo "<h1 id='title'>Destinations close to your click</h1>";
        } else {
          echo "<h1 id='title'>Destinations near " . $results['city_name']. "</h1>";
        }
        ?>
        <div id="content">
          <a href="/" id="return">Back to the Map!</a>
          <div class="row">
            <div class="col s6 offset-s3 center">
              <?= $errors ?>
            </div>
          </div>
          <?php

          function callInstagram($url)
          {
            $ch = curl_init();
            curl_setopt_array($ch, array(
              CURLOPT_URL => $url,
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_SSL_VERIFYPEER => false,
              CURLOPT_SSL_VERIFYHOST => 2
              ));

            $result = curl_exec($ch);
            curl_close($ch);
            return $result;
          }


          foreach ($cities as $city){
            ?>
            <div class = "city">
              <div class = "row">
                <div class="col s6">
                  <h2 class="city_title"><?= $city['name']. "<span> **** </span>" ?></h2>
                </div>
                <div class ="row">
                  <form action="/checkout" method="post" class="col s6">
                    <div class="row">
                      <div class="col s3">
                        <div id = "dropdown">
                          <select name="pickPack" class='dropdown-button btn' data-activates='dropdown1'>
                            <option disabled selected>PACKAGES</option>
                            <option value="4">4 Days $599</option>
                            <option value="10">10 Days $1199</option>
                          </select>
                        </div>
                      </div>
                      <div id="quantity" class="col s3 offset-s4">
                        <select name="quantity"class='dropdown-button btn' data-activates='dropdown1'>
                          <option disabled selected>QTY</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </div>
                    </div>
                    <div class="col s2">
                      <input type="hidden" name="name" value="<?=$city['name']?>">
                      <input type="submit" value="PURCHASE" id="addcart" class="btn"><br>
                    </div>
                  </form>
                </div>
              </div>
              <div class="descr">    
                <?= $city['descr'] ?>  
              </div>
              <div class="pics">
                <?php

                $tag = preg_replace('/\s+/', '', str_replace(",", "", (str_replace(".", "", $city['name']))));
                $client_id = "647fe4705228477691c07541f36e66d7";
                $url = 'https://api.instagram.com/v1/tags/'.$tag.'/media/recent?client_id='.$client_id;

                $inst_stream = callInstagram($url);
                $results = json_decode($inst_stream, true);

          //Now parse through the $results array to display your results...
                $amount = 0;
                foreach($results['data'] as $item){
                  if ($amount > 5)
                  {
                    break;
                  }
                  $amount +=1;
                  $image_link = $item['images']['low_resolution']['url'];
                  echo "<div id = 'igimage'>";
                  echo '<img src="'.$image_link.'" />';
                  echo "</div>";
                }

                ?>
              </div>
              <?php
            }
            ?>
          </div>
          <div class="row">
            <div class="col s12">
              <div id="footer" class="center">
                <a href="#">About Us</a>  |  <a href="#">Contact Us</a>  |  <a href="/" id="return">Back to the Map!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>
    <?php } ?>
    </html>
