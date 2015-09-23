<!DOCTYPE html>
<html>
<head>
  <title>Navigation functions (heading)</title>
  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

  <!-- <src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <meta charset="utf-8">
  <style>


  html, body, #map-canvas {
    height: 300px;
    width: auto;
    margin: 0;
    padding: 0;
  }

  .nav-wrapper{
    background-color: #2BBBAD;
  }

  #panel {
    position: absolute;
    top: 5px;
    left: 50%;
    margin-left: -180px;
    z-index: 5;
    background-color: #fff;
    padding: 5px;
    border: 1px solid #999;
  }

  #panel, .panel {
    font-family: 'Roboto','sans-serif';
    line-height: 30px;
    padding-left: 10px;
  }

  #panel select, #panel input, .panel select, .panel input {
    font-size: 15px;
  }

  #panel select, .panel select {
    width: 100%;
  }

  #panel i, .panel i {
    font-size: 12px;
  }
  #weather , #userinfo {
    margin-left: 100px;
  }


  h5{
    padding-top: 20px;
    margin-left: 100px;
  }

 
  

  #search {
    width: 900px;
    margin-left: 100px;
    
  }
  #getinfo{
    width: auto;
    height: 40px;
    margin-bottom: 0px;
    margin-left: 300px;
  }

.gsc-control
{
  margin-left: 400px;
  width: 500px;
}


  .gsc-search-box
  {
    margin-left: 300px;
  }

  .gsc-result-info-container
  {
    margin-left: 600px;
    display: none;
  }

  .gsc-tabsArea
  {
    margin-left: 400px;
    width: 700px;

  }

  .gsc-result-info{
    display: none;
  }
  
  .gsc-above-wrapper-area{
    display: none;
  }

  }
  #searchcontrol
  {
    margin-left: 40px;
    text-align: center;
  }

  #search, #confirmation
  {
    display: inline-block;
    vertical-align: top;
  }

  

  .gsc-results, .gsc-resultsRoot, .gsc-control
  {
    width: 1000px;
    margin-left: 20px;
  }
  .spam{
    font-style: bold;
  }

  </style>


  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=geometry"></script>
  <script>

  var poly;
  var geodesicPoly;
  var marker1;
  var marker2;

  function initialize() {
    var mapOptions = {
      zoom: 4,
      center: new google.maps.LatLng(34, -40.605)
    };

    var map = new google.maps.Map(document.getElementById('map-canvas'),
    mapOptions);

    map.controls[google.maps.ControlPosition.TOP_CENTER].push(
      document.getElementById('info'));


      marker1 = new google.maps.Marker({
        map: map,
        draggable: true,
        position: new google.maps.LatLng(37.71435280, -122.0059731)
      });
      marker2 = new google.maps.Marker({
        map: map,
        draggable: true,
        position: new google.maps.LatLng(<?= $post['lat'] ?>, <?= $post['lng'] ?>)
      });

      var bounds = new google.maps.LatLngBounds(marker1.getPosition(),
      marker2.getPosition());
      map.fitBounds(bounds);

      google.maps.event.addListener(marker1, 'position_changed', update);
      google.maps.event.addListener(marker2, 'position_changed', update);

      var polyOptions = {
        strokeColor: '#FF0000',
        strokeOpacity: 1.0,
        strokeWeight: 3,
        map: map,
      };
      poly = new google.maps.Polyline(polyOptions);

      var geodesicOptions = {
        strokeColor: '#2BBBAD',
        strokeOpacity: 1.0,
        strokeWeight: 3,
        geodesic: true,
        map: map
      };

      update();
    }

    function update() {
      var path = [marker1.getPosition(), marker2.getPosition()];
      poly.setPath(path);
      geodesicPoly.setPath(path);
      var heading = google.maps.geometry.spherical.computeHeading(path[0],
        path[1]);
        document.getElementById('heading').value = heading;
        document.getElementById('origin').value = path[0].toString();
        document.getElementById('destination').value = path[1].toString();
      }

      google.maps.event.addDomListener(window, 'load', initialize);

    </script>
    </head>

  <body>
    <div id ="wrapper">
      <div id = "header">
        <nav>
          <div class="nav-wrapper">
            <h5>Hey, Thanks for shopping with us. Here's your confirmation and package details.</h5>
          </div>
        </nav>
      </div>
      <div id="map-canvas"></div>



      <div id = "conf">

      </div>


      <div id = "search">




  <script>
      google.load("search", "1", {"language" : "en"});

  // Call this function when the page has been loaded
  function initialize() {
  var searchControl = new google.search.SearchControl();

  // site restricted web search
  var siteSearch = new google.search.WebSearch();

  searchControl.addSearcher(new google.search.WebSearch(<?= '"' . $dest .'"' ?>));
  searchControl.addSearcher(new google.search.NewsSearch());
  searchControl.addSearcher(new google.search.BlogSearch());
  searchControl.addSearcher(new google.search.ImageSearch());
  searchControl.addSearcher(new google.search.BookSearch());
  searchControl.addSearcher(new google.search.VideoSearch());

  var drawOptions = new google.search.DrawOptions();
  // tell the searcher to draw itself in tabbed mode
  drawOptions.setDrawMode(google.search.SearchControl.DRAW_MODE_TABBED);
  searchControl.draw(document.getElementById("searchcontrol"), drawOptions);
  }
  google.setOnLoadCallback(initialize);

  </script>

  <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script>
    $( document ).ready(function() {
      $("#searchcontrol").hide();
      $("#getinfo").click(function(){
        $("#searchcontrol").show();
        $(".gsc-input").val(<?= '"' . $dest .'"' ?>);
        //$(".gsc-search-button").val('GET MORE INFO ');

      });
    });


  </script>

  <a id = "getinfo" class="waves-effect waves-light btn"><spam>Click here </spam>to get More information about your destination.</a>

  <div id="searchcontrol"></div>


      

    </div>

  </body>
</html>

