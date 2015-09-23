<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit Product</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">

    <style>

      #wrapper{
        margin: 50px 200px;
      }

      #ediproduct{
        margin-bottom: 100px;
      }
      #contents{
        margin-left: 200px;
        margin-right: 100px;
      }

      #butttons{
        border-top: 60px;
      }

      #cancel, #preview, #update{

        margin: 10px 20px;
        width: 120px;
      }

      #cancel{
        background-color: grey;
      }

      #preview{
        background-color:
      }

      #update{
        background-color: #46629D;
      }
      #upload{
        margin: 100px 0px;
      }

      .file-field input-field, .file-path validate{
        width: 300px;
        margin-left: 100px;
      }
      .file-field input-field .file-path validate .btn
      {
        display: inline-block;
      }







    </style>

  </head>
  <body>

    <div id = "wrapper">

      <hr>

      <a class="waves-effect waves-light btn">Edit Product -ID 2</a>

      <hr>

      <div id = "contents">


          <div class="row">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s12">
                  <textarea id="textarea1" class="materialize-textarea"></textarea>
                  <label for="textarea1">Name</label>
                </div>
              </div>
            </form>
          </div>


                <div class="row">
                  <form class="col s12">
                    <div class="row">
                      <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea"></textarea>
                        <label for="textarea1">Description</label>
                      </div>
                    </div>
                  </form>
                </div>




              <ul id="dropdown2" class="dropdown-content">
                <li><a href="">Electronics<span class="badge"></span></a></li>
                <li><a href="#!">others<span class="new badge"></span></a></li>
                <li><a href="#!">three</a></li>
              </ul>
                <a class="btn dropdown-button" href="#!" data-activates="dropdown2">Categories<i class="mdi-navigation-arrow-drop-down right"></i></a>


                <div class="row">
                  <form class="col s12">
                    <div class="row">
                      <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea"></textarea>
                        <label for="textarea1">or Add a new category</label>
                      </div>
                    </div>
                  </form>
                </div>



                <div id = "upload">
                  <form action="#">
                    <div class="file-field input-field">
                      <input class="file-path validate" type="text"/>
                      <div class="btn">
                        <span>Images</span>
                        <input type="file" />
                      </div>
                    </div>
                  </form>
              </div>


        <div id = "buttons">
          <hr>
          <a id ="cancel" class="waves-effect waves-light btn">Cancel</a>
          <a id = "preview" class="waves-effect waves-light btn">preview</a>
          <a id = "update" class="waves-effect waves-light btn">Update</a>
          <hr>
        </div>



      </div>

      </div>
    </div>
  </body>
</html>
