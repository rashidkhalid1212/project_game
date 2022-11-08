<?php
//  include 'config.php';
//  include 'header.php';

?>
<!DOCTYPE html>
<html>

<head>
  <title>Sign in demo</title>
  <!-- <link rel="stylesheet" href="bootstrap-5.2.1-dist/css/bootstrap.css" /> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="SignInPage.css">
</head>

<body class="body">

  <div class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
          data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">My Website</a>
      </div>
    </div>
  </div>

  <div class="container ">



    <form  action="signin.php" method="post">

      <div class="row ">
        <div class="col-xs-6 col-md-4 col-centered">
          <div class="form-group">
            <h1>Sign In</h1>


          </div>

        </div>
      </div>




      <div class="row ">
        <div class="col-xs-6 col-md-4 col-centered">
          <div class="form-group">
            <label for="username">Username</label>
            <div class="input-group">
              <span class="glyphicon glyphicon-user input-group-addon" aria-hidden="true"></span>
              <input type="text" class="form-control" name="username" />
            </div>
          </div>

        </div>
      </div>
      <div class="row ">
        <div class="col-xs-6 col-md-4 col-centered">
          <div class="form-group">
            <label for="password">Password</label>
            <div class="input-group">
              <span class="glyphicon glyphicon-asterisk input-group-addon" aria-hidden="true"></span>
              <input type="Password" class="form-control" name="password" />
            </div>
          </div>

        </div>
      </div>

      <div class="row ">
        <div class="col-xs-6 col-md-4 col-centered">
          <div class="checkbox">

            <label>
              <input type="checkbox" name="">
              Keep me logged in
            </label>
          </div>

        </div>
      </div>

      <div class="row ">
        <div class="col-xs-6 col-md-4 col-centered">
          <div class="form-group">

            <input type="submit" value="Sign In" class="btn btn-default center-block colourtwo " name="Sign Up"
              style="background-color: #E0F7FA " />
            <div>

            </div>

          </div>
        </div>





    </form>

  </div>








  <!-- <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
    crossorigin="anonymous"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"></script>
 -->


</body>

</html>