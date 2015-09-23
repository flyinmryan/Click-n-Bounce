<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Show </title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">

    <style>

    #wrapper{

    }

    #contents{
      margin: 0px 100px;
      background-color: white;
    }

    #orderinfo{
        width: 300px;
        height: 400px;
        border: 1px solid grey;
        margin-top: 15px;
        padding: 10px;
      }

      #orderinfo, #main{
        display: inline-block;
        margin-top: 15px;
      }

      #main{
        vertical-align: top;
        margin-left: 80px;
      }

      p{
        margin:0px;
      }
      #table{
        margin-bottom: 40px;
      }

      #total{
        border: 1px solid grey;
        width: 200px;
        height: 100px;
        padding: 10px 30px;
      }

      #orderstatus, #total {
        display: inline-block;
        vertical-align: top;
        margin-left: 50px;

      }


    </style>

  </head>


  <body>
    <div id = "wrapper">

      <div class="navbar-fixed">
        <nav>
          <div class="nav-wrapper">
            <ul>
              <li><a href="">Dashboard</a></li>
              <li> <a href="file:///Users/Abhi/Desktop/GitHub/Ecommerce-Project/Ecommerce/application/views/Admin/Orders.html#!">Orders</a></li>
              <li><a href="file:///Users/Abhi/Desktop/GitHub/Ecommerce-Project/Ecommerce/application/views/Admin/Products.html">Products</a></li>
            </ul>
            <ul class="right hide-on-med-and-down">
              <li><a href="">Log off</a></li>
            </ul>
          </div>
        </nav>
      </div>


      <div id = "contents">


        <div id ="orderinfo">
          <h5> Order ID:1 </h5>

            <p> Customer Shippin info: </p>
            <p> name:bob </p>
            <p> address: 123 dojo way </p>
            <p> seatle </p>
            <p> zip : 98178 </p>


            <h5> Order ID:1 </h5>

              <p> Customer Shippin info: </p>
              <p> name:bob </p>
              <p> address: 123 dojo way </p>
              <p> seatle </p>
              <p> zip : 98178 </p>
        </div>

        <div id = "main">
          <div id = "table">
            <table class = "striped">
              <thead id = "head">
                <tr>
                  <td> ID </td>
                  <td> Item </td>
                  <td> Price </td>
                  <td> Quantity </td>
                  <td> Total </td>

                </tr>
              </thead>

              <tbody>
                <tr>
                  <td> 101 </td>
                  <td> Bob </td>
                  <td> 9/6/2014 </td>
                  <td> 123 Zanker Rd, San Jose, CA, 94009 </td>
                  <td> $14.33 </td>

                </tr>

                <tr>
                  <td> 191 </td>
                  <td> Jack  </td>
                  <td> 9/8/2014 </td>
                  <td> 23123 Zanker Rd, San Jose, CA, 94009 </td>
                  <td> $19.33 </td>

                </tr>

                <tr>
                  <td> 51 </td>
                  <td> Eric  </td>
                  <td> 8/8/2014 </td>
                  <td> 342 Jefferson Rd, San Francisco, CA, 94677 </td>
                  <td> $9.33 </td>

                </tr>

              </tbody>
            </table>
          </div>


          <a id = "orderstatus" class="waves-effect waves-light btn-large">Status: Shipped</a>
          <div id = "total">
            <p> Sub total: $29.98 </p>
            <p> Shipping: $4.00 </p>
            <p> Total Price : $33.98 </p>
          </div>




        </div>




      </div>

    </div>
  </body>
</html>
