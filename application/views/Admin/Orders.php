<html>
  <head>
    <meta charset="utf-8">
    <title>Orders</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
    <script type="text/javascript">
      $(document).ready(function(){

        $.get('/admins/all', function(res){
          $('#tableBody').html(res);
        });

        $(document).on('click', 'a', function(){
          if ($(this).attr('name') == 'edit'){
            var id = $(this).attr('class');
            $.get('edit/' + id, function(res){
              $('#edit').html(res);
            });
            $("#edit").fadeToggle();
            return false;
          } else if ($(this).attr('name') == 'delete') {
            var id = $(this).attr('class');
            $("input[name=orderID]").val(id);
            $("#delete").fadeToggle();
            return false;
          }
        });

        $(document).on("click", ".hideEdit", function(){
          $('#edit').fadeToggle();
        });
        $(document).on("click", ".hideDelete", function(){
          $('#delete').fadeToggle();
          return false;
        })

        $(document).on("submit", "#editOrder", function(){
          $('#edit').fadeToggle();
          $.post('/admins/editProcess', $(this).serialize(), function(res){
            $('#tableBody').html(res);
            return false;
          });
        });

        $(document).on("submit", "#deleteOrder", function(){
          $('#delete').fadeToggle();
          $.post('/admins/delete', $(this).serialize(), function(res){
            $('#tableBody').html(res);
            return false;
          });
        });

        $("#orderSearch").keyup(function(){
          $.post("/admins/searchOrders", $(this).serialize(), function(res){
            console.log(res);
            $("#tableBody").html(res);
          });
          return false;
        });

        $("#orderSearch").submit(function(){
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

    #edit{
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
      #edit button{
        margin: 10px;
      }
    #delete{
      position: fixed;
      width: 50%;
      height: 50%;
      left: 25%;
      top: 20%;
      background-color: gray;
      display: none;
      z-index: 3;
      border-radius: 10px;
    }
      #delete button{
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
          <li class="active"><a href="">Orders</a></li>
          <li><a href="packages">Products</a></li>
        </ul>
        <ul class="right hide-on-med-and-down">
          <li><a href="/Admins/logoff">Log off</a></li>
        </ul>
      </div>
    </nav>
  </div>
  <div id = "header" class="section">
    <div class = "row">
      <div class = "col s3 offset-s1">
        <form method="post" id="orderSearch" action="">
          <div class="input-field">
            <input id="search" type="search" name="search" class="grey-text darken-1" required>
            <label for="search" class="grey-text darken-1"><i class="material-icons">search</i></label>
          </div>
        </form>
      </div>
      <ul id="dropdown1" class="dropdown-content">
        <li><a href="#!" class="grey-text text-darken-1">Pending</a></li>
        <li><a href="#!" class="grey-text text-darken-1">Processed</a></li>
        <li class="divider"></li>
        <li><a href="#!" class="grey-text text-darken-1">Complete</a></li>
      </ul>
      <div>
        <ul class="col s2 offset-s6">
          <li><a class="dropdown-button grey-text text-darken-1" href="#!" data-activates="dropdown1">Filter By Status</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container" id="orders">
    <div id = "table">
      <table class = "striped">
        <thead>
          <tr>
            <th>Order ID</th>
            <th>Dep. Date</th>
            <th>Ret. Date</th>
            <th>Billing Address</th>
            <th>Total</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody id="tableBody">
        </tbody>
      </table>
    </div>
    <div class="row">
      <div id = "pagination">
        <ul class="pagination col s6 offset-s3">
          <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
          <li class="active grey"><a href="#!">1</a></li>
          <li class="disabled"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div id="edit" class="hoverable">
  </div>
  <div id="delete" class="hoverable">
    <div class="row">
      <br>
      <h4 class="white-text col s7 offset-s3">Really delete this order?</h4>
      <button class="btn white black-text hideDelete right">Hide</button>
    </div>
    <br>
    <br>
    <br>
    <div class="row">
      <form method="post" action="" class="col s12 offset-s2" id="deleteOrder">
        <div class="row">
          <div class="input-field col s12">
            <input type="hidden" name="orderID" value="">
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
