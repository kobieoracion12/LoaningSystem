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

<div class="container-fluid">
  <div class="row">
    <div class="col"></div>

    <div class="col-8" style="margin:4.8%">
      <div class="card shadow p-3 mb-5 bg-white rounded">
        <div class="card-body">
          <div class="container-fluid">
            <div class="row g-0">
             <div class="col-md-4 g-0">
              <img class="login-vector" src="img/login-vector.jpg">
             </div>

             <div class="col">
               <div class="container-fluid">
                 <div class="row">
                   <form style="padding: 15%">
                    <div class="mb-3 mt-3">
                      <h3 style="font-weight: bold">Log in</h3><br><br><br>

                      <label for="username-input" class="form-label" style="float:left; font-weight: bold; font-size: 1.1vw">Username</label><br>
                      <input type="text" id="username-input" class="form-control form-style" placeholder="Username"><br>

                      <label for="password-input" class="form-label"  style="float:left; font-weight: bold; font-size: 1.1vw">Password</label><br>
                      <input type="password" id="password-input" class="form-control form-style" placeholder="Password"><br>

                      <p style="font-weight: bold">Don't have an account? <a href="#" style="text-decoration: none">Sign up Here!</a></p>

                      <button type="submit" class="btn btn-primary login-button btn-lg">Login</button>
                    </div>
                   </form>
                 </div>
               </div>
             </div> 
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="col"></div>
  </div>
</div>

</body>
</html>
