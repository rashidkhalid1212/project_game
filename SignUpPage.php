
<!DOCTYPE html>
<html>

<head>
  <title>Sign up demo</title>
  <!-- <link rel="stylesheet" href="bootstrap-5.2.1-dist/css/bootstrap.css" /> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="SignUpPage.css">

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



    <!-- <form>

<div class="row " >
  <div class="col-xs-6 col-md-4 col-centered">
      <div class="form-group">
      <h3>Sign up using your email</h3>
    
	
      </div>

  </div>
</div> -->



    <form action="signup.php" method="post">
      <div class="row ">
        <div class="col-xs-6 col-md-4 col-centered">
          <div class="form-group">
            <label for="firstname">First Name</label>
            <div class="input-group">
              <span class="glyphicon glyphicon-user input-group-addon" aria-hidden="true"></span>
              <input type="text" class="form-control" name="firstname" />
            </div>
          </div>

        </div>
      </div>

      <div class="row ">
        <div class="col-xs-6 col-md-4 col-centered">
          <div class="form-group">
            <label for="lastname">Last Name</label>
            <div class="input-group">
              <span class="glyphicon glyphicon-user input-group-addon" aria-hidden="true"></span>
              <input type="text" class="form-control" name="lastname" />
            </div>
          </div>

        </div>
      </div>

      <div class="row ">
        <div class="col-xs-6 col-md-4 col-centered">
          <div class="form-group">
            <label for="email">Email ID</label>
            <div class="input-group">
              <span class="input-group-addon" aria-hidden="true">@</span>
              <input type="email" class="form-control" name="email" />
            </div>
          </div>

        </div>
      </div>

      <div class="row ">
        <div class="col-xs-6 col-md-4 col-centered">
          <div class="form-group">
            <label for="dob">Date Of Birth</label>
            <div class="input-group">
              <span class=" glyphicon glyphicon-calendar input-group-addon" aria-hidden="true"></span>
              <input type="date" class="form-control" name="dob" />
            </div>
          </div>

        </div>
      </div>

      <div class="row ">
        <div class="col-xs-6 col-md-4 col-centered">
          <div class="form-group">
            <label for="password">password</label>
            <div class="input-group">
              <span class="input-group-addon" aria-hidden="true">@</span>
              <input type="password" class="form-control" name="password" />
            </div>
          </div>

        </div>
      </div>



      <div class="row ">
        <div class="col-xs-6 col-md-4 col-centered center-block">
          <div class="form-group">
            <h6>By registering, you agree to the terms and conditions.</h6>

            <div>

            </div>

          </div>
        </div>






        <div class="row ">
          <div class="col-xs-6 col-md-4 col-centered">
            <div class="form-group">

              <input type="submit" value="Sign Up" class="btn btn-default center-block colourtwo " name="Sign Up"
                style="background-color: #E0F7FA " />
              <div>

              </div>

            </div>
          </div>


          <!-- <div class="row">
          <div class="col-xs-6 col-md-4 col-centered">
            <div class="form-group">
              <center><label class="center-block">OR</label> </center>
              <span class="social social-google-plus "></span>
            </div>


          </div>
        </div>




        <div class="row">
          <div class="col-xs-6 col-md-4 col-centered">
            <div class="form-group">

              <input type="submit" value="Sign up via Google+" class="btn btn-default center-block  colour "
                style="background-color: #de4e43 " name="Sign Up" />

            </div>


          </div>
        </div>

        <div class="row">
          <div class="col-xs-6 col-md-4 col-centered">
            <div class="form-group">
              <span class="social social-google-plus"></span>
              <input type="submit" value="Sign up via Facebook" class="btn btn-default center-block colour "
                style="background-color: #415e9b " name="Sign Up" />

            </div>


          </div>
        </div>





        </form>

      </div>

 -->


    </form>
  </div>

  <!-- <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
    crossorigin="anonymous"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"></script> -->



</body>

</html>