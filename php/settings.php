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

<div class="container-fluid">
	<div class="row flex-nowrap">
		<!--Navigation Sidebar-->
		<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-white">
			<div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-3 min-vh-100">
				<span class="fs-5 d-none d-sm-inline fw-bold">Menu</span>

				<hr>

				<ul class="nav nav-pills flex-column mb-sm-auto mb-0 ms-2 align-items-start" id="menu">
					<li class="nav-item nav-list">
						<a href="dashboard.php" class="nav-link align-middle px-0 text-wrap">
							<i class="fas fa-regular fa-gauge bi me-2"></i>	
							<span class="d-none d-sm-inline fw-bold">Dashboard</span>
						</a>
					</li>

					 <li class="nav-item nav-list">
                        <a href="#install" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fas fa-regular fa-credit-card bi me-2"></i> <span class="ms-1 d-none d-sm-inline fw-bold">Installment</span> </a>
                        <ul class="collapse show nav flex-column ms-1 text-start" id="install" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="new-installment.php" class="nav-link px-0"> <span class="d-none d-sm-inline">New Installment</span></a>
                            </li>
                            
                            <li>
                                <a href="transcations.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Transaction Record</span></a>
                            </li>

                            <li>
                                <a href="paynow.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Pay Now</span></a>
                            </li>
                        </ul>
                    </li>

					<li class="nav-item nav-list">
						<a href="accounts.php" class="nav-link align-middle px-0">
							<i class="fas fa-regular fa-user bi me-2"></i>	
							<span class="d-none d-sm-inline fw-bold">Accounts</span>
						</a>
					</li>

					<li class="nav-item nav-list">
						<a href="settings.php" class="nav-link align-middle px-0">
							<i class="fas fa-regular fa-gear bi me-2"></i>	
							<span class="d-none d-sm-inline fw-bold">Settings</span>
						</a>
					</li>
				</ul>

				<hr>

				<div class="dropdown pb-4">
					<a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="user-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="fas fa-regular fa-circle-user bi me-2"></i>
						<span class="d-none d-sm-inline mx-1 fw-bold">Full Name</span>
					</a>
					<ul class="dropdown-menu text-small shadow">
						<li><a class="dropdown-item" href="#">New Installment...</a></li>
						<li><a class="dropdown-item" href="#">Settings</a></li>
						<li><a class="dropdown-item" href="#">Profile</a></li>
						<li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
					</ul>
				</div>
			</div>
		</div>

		<!--Main Content-->
		<div class="col py-3 d-flex justify-content-center align-items-center vh-100 bg-light text-dark">
			<div class="container-fluid">
				<div class="row">
					<div class="col">
						<h2 class="text-start ps-3">Settings</h2>
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