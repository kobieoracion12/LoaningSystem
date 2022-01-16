<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Accounts</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style-min.css">
	<link rel="stylesheet" type="text/css" href="../css/fontawesome.css">
	<link rel="stylesheet" type="text/css" href="../css/brands.css">
	<link rel="stylesheet" type="text/css" href="../css/solid.css">
</head>
<body>

<!--Divider-->
<div class="container-fluid">
	 <div class="row g-0">

	 	<!--Left Sidebar-->
	 	<div class="col-2 g-0">
	 		<div class="container-fluid g-0">
				<div class="row flex-nowrap">
					<div class="d-flex flex-column flex-shrink-0 p-3 bg-light nav-width shadow p-3 mb-5 rounded-0">
						<a class="d-flex align-items-center mb-3 mb-md-0 me-auto link-dark text-decoration-none" href="#">
							<span class="fs-4"><strong>Welcome Back</strong></span>
						</a>

						<hr>

						<ul class="nav nav-pills flex-column mb-auto nav-style">
							<li class="nav-item">
								<a class="nav-link" aira-current="page" href="home.php">
									<i class="fas fa-regular fa-house bi me-2"></i>	
									Home
								</a>
							</li>

							<li class="nav-item nav-list">
								<a class="nav-link" href="dashboard.php">
									<i class="fas fa-regular fa-gauge bi me-2"></i>	
									Dashboard
								</a>
							</li>

							<li class="nav-item nav-list">
								<a class="nav-link" href="installments.php">
									<i class="fas fa-regular fa-credit-card bi me-2"></i>	
									Installments
								</a>
							</li>

							<li class="nav-item nav-list">
								<a class="nav-link active" href="account.php">
									<i class="fas fa-regular fa-user bi me-2"></i>
									Accounts
								</a>
							</li>

							<li class="nav-item nav-list">
								<a class="nav-link" href="settings.php">
									<i class="fas fa-regular fa-gear bi me-2"></i>
									Settings
								</a>
							</li>
						</ul>

						<hr>

						<div class="dropdown">
							<a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser" data-bs-toggle="dropdown" aira-expanded="false">
								<i class="fas fa-regular fa-circle-user bi me-2"></i>	
								<strong>Name</strong>
							</a>

							<ul class="dropdown-menu text-small-shadow dropdown-style" aria-labelby="dropdownUser" data-popper-placement="top-start">
								<li>
									<a class="dropdown-item" href="#">New Installment...</a>
								</li>

								<li>
									<a class="dropdown-item" href="#">Settings</a>
								</li>

								<li>
									<a class="dropdown-item" href="#">Profile</a>
								</li>

								<li>
									<hr class="dropdown-divider">
								</li>

								<li>
									<a class="dropdown-item" href="#">Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
	 	</div>

	 	<!--Main Body-->
	 	<div class="col-10 g-5 ps-5 main-content">
	 		<div class="container g-5">
	 			<h3 class="text-light ps-4"><strong>My Account</strong></h3><br>

	 			<div class="card shadow p-2 mb-5 bg-body rounded-3 g-0">
	 				<div class="card-body p-5">
	 					<div class="container-fluid">

	 						<!--Left Side-->
	 						<div class="row">
	 							<div class="col">
	 								<div class="container-fluid">
	 									<label for="user-email"><strong>First Name</strong></label>
			 							<div class="card shadow-sm mb-5 bg-body rounded-3" id="user-email">
				 							<div class="card-body">
				 								<div class="container">
				 									<div class="row">
				 										<div class="col">
						 									Kobie
						 								</div>

						 								<div class="col text-end">
						 									 <a href="#" data-bs-toggle="modal" data-bs-target="#f-modal">
						 									 	<i class="fa-solid fa-pencil"></i>
						 									 </a>

						 									 <div class="modal fade" id="f-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
						 									 	<div class="modal-dialog modal-dialog-centered">
						 									 		<div class="modal-content">
						 									 			<div class="modal-header">
						 									 				<h5 class="modal-title" id="staticBackdropLabel">Edit Details</h5>
        																	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						 									 			</div>

						 									 			<div class="modal-body text-center">
						 									 				<form class="form-control" method="post">
						 									 					<div class="mb-3 text-start">
						 									 						<label for="recipient-name" class="col-form-label ps-3">First Name:</label>
            																		<input type="text" class="form-control" id="recipient-name">
						 									 					</div>
						 									 				</form>
						 									 			</div>

						 									 			<div class="modal-footer">
						 									 				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						 									 				<button type="button" class="btn btn-primary">Edit</button>
						 									 			</div>
						 									 		</div>
						 									 	</div>
						 									 </div>
						 								</div>
				 									</div>
				 								</div>
				 							</div>
				 						</div>
	 								</div>		
	 							</div>

	 							<div class="col">
	 								<div class="container-fluid">
	 									<label for="user-email"><strong>Email Address</strong></label>
			 							<div class="card shadow-sm mb-5 bg-body rounded-3" id="user-email">
				 							<div class="card-body">
				 								<div class="container ">
				 									<div class="row">
				 										<div class="col">
						 									kobie.oracion12@gmail.com
						 								</div>

						 								<div class="col text-end">
						 									 <a href="#" data-bs-toggle="modal" data-bs-target="#email-modal">
						 									 	<i class="fa-solid fa-pencil"></i>
						 									 </a>

						 									 <div class="modal fade" id="email-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
						 									 	<div class="modal-dialog modal-dialog-centered">
						 									 		<div class="modal-content">
						 									 			<div class="modal-header">
						 									 				<h5 class="modal-title" id="staticBackdropLabel">Edit Details</h5>
        																	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						 									 			</div>

						 									 			<div class="modal-body text-center">
						 									 				<form class="form-control" method="post">
						 									 					<div class="mb-3 text-start">
						 									 						<label for="recipient-name" class="col-form-label ps-3">Email Address:</label>
            																		<input type="text" class="form-control" id="recipient-name">
						 									 					</div>
						 									 				</form>
						 									 			</div>

						 									 			<div class="modal-footer">
						 									 				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						 									 				<button type="button" class="btn btn-primary">Edit</button>
						 									 			</div>
						 									 		</div>
						 									 	</div>
						 									 </div>
						 								</div>
				 									</div>
				 								</div>
				 							</div>
				 						</div>
	 								</div>		
	 							</div>
	 						</div>

	 						<!--Right Side-->
	 						<div class="row">
	 							<div class="col">
	 								<div class="container-fluid">
	 									<label for="user-email"><strong>Last Name</strong></label>
			 							<div class="card shadow-sm mb-5 bg-body rounded-3" id="user-email">
				 							<div class="card-body">
				 								<div class="container ">
				 									<div class="row">
				 										<div class="col">
						 									Oracion
						 								</div>

						 								<div class="col text-end">
						 									 <a href="#" data-bs-toggle="modal" data-bs-target="#last-modal">
						 									 	<i class="fa-solid fa-pencil"></i>
						 									 </a>

						 									 <div class="modal fade" id="last-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
						 									 	<div class="modal-dialog modal-dialog-centered">
						 									 		<div class="modal-content">
						 									 			<div class="modal-header">
						 									 				<h5 class="modal-title" id="staticBackdropLabel">Edit Details</h5>
        																	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						 									 			</div>

						 									 			<div class="modal-body text-center">
						 									 				<form class="form-control" method="post">
						 									 					<div class="mb-3 text-start">
						 									 						<label for="recipient-name" class="col-form-label ps-3">Last Name:</label>
            																		<input type="text" class="form-control" id="recipient-name">
						 									 					</div>
						 									 				</form>
						 									 			</div>

						 									 			<div class="modal-footer">
						 									 				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						 									 				<button type="button" class="btn btn-primary">Edit</button>
						 									 			</div>
						 									 		</div>
						 									 	</div>
						 									 </div>
						 								</div>
				 									</div>
				 								</div>
				 							</div>
				 						</div>
	 								</div>		
	 							</div>

	 							<div class="col">
	 								<div class="container-fluid">
	 									<label for="user-email"><strong>Contact Number</strong></label>
			 							<div class="card shadow-sm mb-5 bg-body rounded-3" id="user-email">
				 							<div class="card-body">
				 								<div class="container ">
				 									<div class="row">
				 										<div class="col">
						 									09976616289
						 								</div>

						 								<div class="col text-end">
						 									 <a href="#" data-bs-toggle="modal" data-bs-target="#number-modal">
						 									 	<i class="fa-solid fa-pencil"></i>
						 									 </a>

						 									 <div class="modal fade" id="number-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
						 									 	<div class="modal-dialog modal-dialog-centered">
						 									 		<div class="modal-content">
						 									 			<div class="modal-header">
						 									 				<h5 class="modal-title" id="staticBackdropLabel">Edit Details</h5>
        																	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						 									 			</div>

						 									 			<div class="modal-body text-center">
						 									 				<form class="form-control" method="post">
						 									 					<div class="mb-3 text-start">
						 									 						<label for="recipient-name" class="col-form-label ps-3">Mobile Number:</label>
            																		<input type="text" class="form-control" id="recipient-name">
						 									 					</div>
						 									 				</form>
						 									 			</div>

						 									 			<div class="modal-footer">
						 									 				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						 									 				<button type="button" class="btn btn-primary">Edit</button>
						 									 			</div>
						 									 		</div>
						 									 	</div>
						 									 </div>
						 								</div>
				 									</div>
				 								</div>
				 							</div>
				 						</div>
	 								</div>		
	 							</div>
	 						</div>
	 					</div>
	 				</div>
	 			</div>
	 		</div>
	 	</div>

	 	
	 </div>
</div>

<script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="../js/mdb.min.js"></script>
</body>
</html>