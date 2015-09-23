<html>
<head>
  <meta charset="utf-8">
  <title>Packages</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
  <script type="text/javascript">
  $(document).ready(function(){
    
    $.get('admins/allProducts', function(res){
      $('#tableBody').html(res);
    });
    $.get('admins/defaultPagination', function(res){
      $('#pagination').html(res);
    });

    $(".newprod").click(function(){
      $.get('/admins/newPackage', function(res){
        $("#addPackage").html(res);
      });
      $("#addPackage").fadeToggle();
      return false;
    });

    $(document).on("click", ".hideAdd", function(){
      $("#addPackage").fadeToggle();
      return false;
    });

    $(document).on("submit", "#addNewProduct", function(){
      $.post("/admins/newPackageProcess", $(this).serialize(), function(res){
        $("#tableBody").html(res);
      });
      $.get('admins/currentPagination', function(res){
        $('#pagination').html(res);
      });
      $("#addPackage").fadeToggle();
      return false;
    });

    $(document).on('click', 'a', function(){
      if ($(this).attr('name') == 'edit'){
        var id = $(this).attr('class');
        $.get('editPackage/' + id, function(res){
          console.log(res);
          $('#editPackage').html(res);
        });
        $("#editPackage").fadeToggle();
        return false;
      } else if ($(this).attr('name') == 'delete') {
        var id = $(this).attr('class');
        $("input[name=packageID]").val(id);
        $("#removePackage").fadeToggle();
        return false;
      }
    });

    $(document).on("click", ".hideDelete", function(){
      $("#removePackage").fadeToggle();
      return false;
    });

    $(document).on("submit", "#deletePackage", function(){
      $("#removePackage").fadeToggle();
      $.post('/admins/deletePackage', $(this).serialize(), function(res){
        $("#tableBody").html(res);
      });
      $.get('admins/currentPagination', function(res){
        $('#pagination').html(res);
      });
      return false;
    });

    $(document).on("click", ".hideEdit", function(){
      $("#editPackage").fadeToggle();
      return false;
    });

    $(document).on("submit", "#changePackage", function(){
      $.post("/admins/editPackageProcess", $(this).serialize(), function(res){
        $("#tableBody").html(res);
      });
      $.get('admins/currentPagination', function(res){
        $('#pagination').html(res);
      });
      $("#editPackage").fadeToggle();
      return false;
    });

    $("#changePackage").submit(function(){
      $("#editPackage").fadeToggle();
      $.post("/admins/editPackageProcess", $(this).serialize(), function(res){
        $("#tableBody").html(res);
      });
      $.get('admins/currentPagination', function(res){
        $('#pagination').html(res);
      });
      return false;
    });

    $("#prodSearch").keyup(function(){
      $.post("/admins/searchPackages", $(this).serialize(), function(res){
        $("#tableBody").html(res);
      });
      $.post("/admins/pagination/1", $(this).serialize(), function(res){
        $("#pagination").html(res);
      });
      return false;
    });

    $("#prodSearch").submit(function(){
      return false;
    });

    $(document).on("click", "#pagination a", function(){
      var id = $(this).attr('value');
      var query = $('input[name=search]').val();
      if (query == '') {
        $.get("/admins/pagedPaginationSolo/" + id, function(res){
          $("#pagination").html(res);
        });
        $.get("/admins/pagedResultsSolo/" + id, function(res){
          $("#tableBody").html(res);
        });
      } else {
        $.get("/admins/pagedPagination/" + id + '/' + query, function(res){
          $("#pagination").html(res);
        });
        $.get("/admins/pagedResults/" + id + '/' + query, function(res){
          $("#tableBody").html(res);
        });
      }
      return false;
    });

  });
</script>
<style>

#content{
  margin: 0px auto;
  background-color: white;
}

#pagination{
  margin: 0px auto;
  width: 50%;
}

button{
  margin-top: 25px;
}

#addPackage{
  position: fixed;
  width: 70%;
  height: 70%;
  left: 15%;
  right: 15%;
  top: 20%;
  background-color: gray;
  display: none;
  z-index: 3;
  border-radius: 10px;
}
#addPackage button{
  margin: 10px;
}
#editPackage{
  position: fixed;
  width: 70%;
  height: 70%;
  left: 15%;
  right: 15%;
  top: 20%;
  background-color: gray;
  display: none;
  z-index: 3;
  border-radius: 10px;
}
#editPackage button{
  margin: 10px;
}
#removePackage{
  position: fixed;
  width: 70%;
  height: 70%;
  left: 15%;
  right: 15%;
  top: 20%;
  background-color: gray;
  display: none;
  z-index: 3;
  border-radius: 10px;
}
#removePackage button{
  margin: 10px;
}

.input-field label {
  color: white;
}
/* label focus color */
.input-field input[type=text]:focus + label {
  color: white;
}
/* label underline focus color */
.input-field input[type=text]:focus {
  border-bottom: 1px solid white;
  box-shadow: 0 1px 0 0 white;
} 

</style>
</head>

<body>
  <div id = "wrapper">
    <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper grey darken-1">
          <ul class="left hide-on-med-and-down">
            <li class="active"><a href="">Dashboard</a></li>
            <li><a href="orders">Orders</a></li>
            <li class="active"><a href="">Products</a></li>
          </ul>
          <ul class="right hide-on-med-and-down">
            <li><a href="/Controller/logoff">Log off</a></li>
          </ul>
        </div>
      </nav>
    </div>
    <div id = "header" class="section">
      <div class = "row">
        <div class = "col s3 offset-s1">
          <form method="post" id="prodSearch" action="">
            <div class="input-field">
              <input id="search" type="search" name="search" class="grey-text darken-1" required>
              <label for="search"><i class="material-icons grey-text darken-1">search</i></label>
            </div>
          </form>
        </div>
        <button class="btn waves-effect waves-light grey darken-1 col s2 offset-s5 newprod">Add New Product</button>
      </div>
    </div>
    <div class="container">
      <div id = "table">
        <table class = "striped">
          <thead>
            <tr>
              <th> ID </th>
              <th> City Name </th>
              <th> Duration </th>
              <th> Price </th>
              <th> Action </th>
            </tr>
          </thead>
          <tbody id="tableBody">
          </tbody>
        </table>
      </div>
    </div>
    <div class="row">
      <div id = "pagination">
      </div>
    </div>
    <div id="addPackage">
    </div>
    <div id="editPackage">
    </div>
    <div id="removePackage" class="hoverable">
      <div class="row">
        <br>
        <h4 class="white-text col s7 offset-s3">Really delete this package?</h4>
        <button class="btn white black-text hideDelete right">Hide</button>
      </div>
      <br>
      <br>
      <br>
      <div class="row">
        <form method="post" action="" class="col s12 offset-s2" id="deletePackage">
          <div class="row">
            <div class="input-field col s12">
              <input type="hidden" name="packageID" value="">
              <button class="btn green white-text col s3" type="submit" value="Yes">Yes</button>
              <button class="btn red white-text hideDelete col s5">No</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
