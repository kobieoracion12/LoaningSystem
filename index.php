<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Loaning System</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style-min.css">
</head>
<body>

<div class="d-flex justify-content-center align-items-center vh-100">
  <div class="card bg-white rounded-3 w-75">
    <div class="card-body">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <img class="login-vector" src="img/login-vector.jpg">
          </div>


          <div class="col">
            <form method="post" action="php/auth.php" style="padding: 15%">
              <div class="mb-3 mt-3">
                <h3 style="font-weight: bold">Login</h3><br><br>
                
                <label for="username-input" class="form-label" style="float:left; font-weight: bold;">Username</label><br>
                <input type="text" id="username-input" name="username-input" class="form-control form-style" placeholder="Username" required><br>

                <label for="password-input" class="form-label"  style="float:left; font-weight: bold;">Password</label><br>
                <input type="password" id="password-input" name="password-input" class="form-control form-style" placeholder="Password" required><br>

                <p style="font-weight: bold">Don't have an account? <a href="php/sign-up.php" style="text-decoration: none">Sign up Here!</a></p><br>

                <button type="submit" name="login_btn" value="Submit" class="btn btn-primary login-button btn-lg">Login</button>
              </div>

              <?php
              if(isset($_GET['Invalid'])) {
                echo '<div class="alert alert-danger" role="alert">
                      Invalid username and password.
                      </div>';
              }

              if(isset($_GET['Login'])) {
                echo '<div class="alert alert-danger" role="alert">
                      Session broken. Login First.
                      </div>';
              }
            ?>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
<script type="text/javascript" src="js/bootstrap.js"></script>
</html>
