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
          				<div class="progress-bar w-50" role="progresbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">50%</div>
          			</div>
          		</div>
          	</div>

	        <form style="padding: 5%" method="post" action="registration.php">
	            <div class="row g-0">
	            	<div class="col g-0" style="padding: 2%">
	            		<div class="container-fluid">
	            			<label for="first-input" class="form-label" style="float:left; font-weight: bold; font-size: 1.1vw">First Name</label><br>
	                      	<input type="text" id="first-input" class="form-control form-style" placeholder="First Name"><br>

	                      	<label for="last-input" class="form-label" style="float:left; font-weight: bold; font-size: 1.1vw">Last Name</label><br>
	                      	<input type="text" id="last-input" class="form-control form-style" placeholder="Last Name"><br>

	                      	<label for="email-input" class="form-label" style="float:left; font-weight: bold; font-size: 1.1vw">Email Address</label><br>
	                      	<input type="email" id="email-input" class="form-control form-style" placeholder="example@email.com"><br>

	                      	<label for="number-input" class="form-label" style="float:left; font-weight: bold; font-size: 1.1vw">Mobile Number</label><br>
	                      	<input type="number" id="number-input" class="form-control form-style" placeholder="09xxxxxxxxx">
	            		</div>
	            	</div>

		            <div class="col g-0" style="padding: 2%">
		              <div class="container-fluid">
		                <div class="row">
		                	<div class="col">
			                	<label for="bday-input" class="form-label" style="float:left; font-weight: bold; font-size: 1.1vw">Birth Date</label><br>
			                	<input type="date" id="bday-input" class="form-control form-style" placeholder="Birth Date"><br>
			                </div>

			                <div class="col">
			                	<label for="age-input" class="form-label" style="float:left; font-weight: bold; font-size: 1.1vw">Age</label><br>
			                	<input type="text" id="age-input" class="form-control form-style" placeholder="" readonly><br>
			                </div>
		                </div>

		                <label for="address-input" class="form-label" style="float:left; font-weight: bold; font-size: 1.1vw">Address</label><br>
	                    <textarea class="form-control" id="address-input" rows="5"></textarea><br>

	                    <label for="form-input" class="form-label" style="float:left; font-weight: bold; font-size: 1.1vw">Valid ID</label>
	                    <a href="#"><i class="fas fa-question-circle" title="More Information" style="float:left; margin-left:5px; margin-top: 7px"></i></a>
			            <input type="file" id="form-input" class="form-control form-style">
		              </div>
		            </div> 
	           	</div>
	          </div>
	      	</form>
        </div>

        <div class="container-fluid">
        	<div class="row g-0" style="padding-bottom: 3%">
        		<div class="col g-0">
        			<nav aria-label="Pagination">
        				<ul class="pagination justify-content-end">
        					<li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
        					<li class="page-item active"><a class="page-link" href="#">1</a></li>
        					<li class="page-item"><a class="page-link" href="sign-up2.php">2</a></li>
        					<li class="page-item"><a class="page-link" href="sign-up2.php">Next</a></li>
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
