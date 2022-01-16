<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Account</title>
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
	 	<div class="col g-0">
	 		<div class="container g-0">
				<div class="row flex-nowrap">
					<div class="d-flex flex-column flex-shrink-0 p-3 bg-light nav-width shadow p-3 mb-5 bg-body rounded-0">
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
	 	<div class="col g-4 main-content">
	 		<div class="container-fluid">
	 			<h3 class="text-light"><strong>Account Settings</strong></h3><br>
	 			
	 		</div>
	 	</div>
	 </div>
</div>

<script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="../js/mdb.min.js"></script>
</body>
</html>