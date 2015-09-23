<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Admin Login </title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
</head>

<style>

#wrapper{
  padding: 100px;
  border: 1px solid lime;
  margin: 200px 400px;
}

#h6{
  margin-left: 50px;
  color: green;
}

</style>

</head>
<body>

  <div id ="wrapper">

    <a class="btn disabled">Admin Login Page </a>


    <form action="/Admins/login/" method = "post">

      <div class="row">
        <!-- <form class="col s12"> -->
        <div class="row">

          <div class="row">
            <div class="input-field col s12">
              <input id="email" type="text" class="validate" name = 'email'>
              <label for="email">Email</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <input id="password" type="password" class="validate" name='password'>
              <label for="password">Password</label>
            </div>
          </div>

          <input type = "submit" name = "submit" value = "login" class="waves-effect waves-light btn">


        </div>
      </form>

    </div>

  </body>
  </html>
