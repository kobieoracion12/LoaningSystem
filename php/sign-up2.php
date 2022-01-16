<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style-min.css">
	<link rel="stylesheet" type="text/css" href="../css/fontawesome.css">
	<link rel="stylesheet" type="text/css" href="../css/brands.css">
	<link rel="stylesheet" type="text/css" href="../css/solid.css">
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
          		<div class="col g-0">
          			<h4><b>Registration Progress</b></h4><br>
          			<div class="progress" style="height: 30px">
          				<div class="progress-bar w-100 bg-success" role="progresbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">99%</div>
          			</div>
          		</div>
          	</div>

	        <form style="padding: 5%">
	            <div class="row g-0">
	            	<div class="col g-0" style="padding: 2%">
	            		<div class="container-fluid">
	            			<label for="user-input" class="form-label" style="float:left; font-weight: bold; font-size: 1.1vw">Username</label><br>
	                      	<input type="text" id="user-input" class="form-control form-style" placeholder="Username"><br>

	                      	<label for="password-input" class="form-label" style="float:left; font-weight: bold; font-size: 1.1vw">Password</label><br>
	                      	<input type="password" id="password-input" class="form-control form-style" placeholder="Password"><br>

	                      	<label for="password2-input" class="form-label" style="float:left; font-weight: bold; font-size: 1.1vw">Confirm Password</label><br>
	                      	<input type="password" id="password2-input" class="form-control form-style" placeholder="Confirm Password"><br>

	                      	
	            		</div>
	            	</div>

		            <div class="col g-0" style="padding: 2%">
		              <div class="container-fluid">
		                <div class="row">
		                	<div class="accordion" id="terms-conditions">
		                		<div class="accordion-item">
		                			<h2 class="accordion-header" id="terms-header">
		                				<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
		                				<strong>Terms & Conditions</strong></button>
		                			</h2>
		                			
		                			<div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
								      <div class="accordion-body">
								        <strong>JNK Loaning Corp. Terms & Conditions</strong><br><br>

								         By accessing this web site, you are agreeing to be bound by these web site Terms and Conditions of Use, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site. The materials contained in this web site are protected by applicable copyright and trade mark law.
								      </div>
								    </div>

								    <div class="form-check" style="float:right; font-weight: bold">
			                      		<br>
			                      		<label class="form-check-label" for="terms-input">I Agree to the Terms & Conditions</label>
			                      		<input class="form-check-input" type="checkbox" id="terms-input">
			                      	</div>
		                		</div>
		                	</div>
		                </div>
		              </div>
		            </div> 
	           	</div>
	          </div>
	      	</form>
        </div>

        <div class="container-fluid">
        	<div class="row g-0" style="padding-bottom: 3%">
        		<div class="col g-0">
	       			<button type="submit" class="btn btn-primary reg-submit btn-block">Submit</button>
        			<button type="cancel" class="btn btn-danger btn-block">Cancel</button>

        			<nav aria-label="Pagination">
        				<ul class="pagination justify-content-end">
        					<li class="page-item"><a class="page-link" href="sign-up.php">Previous</a></li>
        					<li class="page-item"><a class="page-link" href="sign-up.php">1</a></li>
        					<li class="page-item active"><a class="page-link" href="#">2</a></li>
        					<li class="page-item disabled"><a class="page-link" href="#">Next</a></li>
        				</ul>
        			</nav>
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
