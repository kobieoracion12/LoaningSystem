<?php
	include_once "session.php";
	include_once "userdata.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
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
		<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-white shadow">
			<div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-3 min-vh-100">
				<span class="fs-5 d-none d-sm-inline fw-bold">Admin</span>

				<hr>

				<ul class="nav nav-pills flex-column mb-sm-auto mb-0 ms-2 align-items-start" id="menu">
					<li class="nav-item nav-list">
						<a href="dashboard.php" class="nav-link align-middle px-0 text-wrap">
							<i class="fas fa-regular fa-gauge bi me-2"></i>	
							<span class="d-none d-sm-inline fw-bold">Dashboard</span>
						</a>
					</li>

					<li class="nav-item nav-list">
						<a href="manage-accounts.php" class="nav-link align-middle px-0">
							<i class="fas fa-regular fa-user bi me-2"></i>	
							<span class="d-none d-sm-inline fw-bold">Accounts</span>
						</a>
					</li>

					<li class="nav-item nav-list">
						<a href="manage-clients.php" class="nav-link align-middle px-0">
							<i class="fas fa-regular fa-user-group bi me-2"></i>	
							<span class="d-none d-sm-inline fw-bold">Manage Clients</span>
						</a>
					</li>

					<li class="nav-item nav-list">
						<a href="loan-management.php" class="nav-link align-middle px-0">
							<i class="fas fa-regular fa-hand-holding-dollar bi me-2"></i>	
							<span class="d-none d-sm-inline fw-bold">Loan Management</span>
						</a>
					</li>

					<li class="nav-item nav-list">
						<a href="admin-settings.php" class="nav-link align-middle px-0">
							<i class="fas fa-regular fa-gear bi me-2"></i>	
							<span class="d-none d-sm-inline fw-bold">Settings</span>
						</a>
					</li>
				</ul>

				<hr>

				<div class="dropdown pb-4">
					<a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="user-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="fas fa-regular fa-circle-user bi me-2"></i>
						<span class="d-none d-sm-inline mx-1 fw-bold">
							<?php
								echo $_SESSION['first'];
								echo " ";
								echo $_SESSION['last'];
							?>
						</span>
					</a>
					<ul class="dropdown-menu text-small shadow">
						<li><a class="dropdown-item" href="#">Settings</a></li>
						<li><a class="dropdown-item" href="#">Profile</a></li>
						<li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
					</ul>
				</div>
			</div>
		</div>

		<!--Main Content-->
		<div class="col py-3 d-flex justify-content-center overflow-auto">
			<div class="container-fluid">
				<div class="row">
					<div class="col">
						<br>
						<h2 class="text-white text-start ps-3">Dashboard</h2><br>
					</div>
				</div>

				<!--Header Card-->
				<div class="row">
					<!--Welcome Card-->
					<div class="col-12">
						<div class="card">
							<div class="card-body m-5">
								<div class="row">
									<div class="col-12 text-start">
										<div class="row">
											<div class="col-xxl-8 col-sm-12">
												<h4>Welcome Back, Admin</h4><br>
												<small>
													Welcome to your personal dashboard!<br>
													We got you covered in real-time data management and monitoring.
												</small>
											</div>

											<div class="col-xxl-4 col-sm-12 mt-4">
												<img src="../img/at-work.svg" class="img-fluid"> 
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<br>

				<!--Charts-->
				<div class="row">
					<!--Pie Chart-->
					<div class="col-xxl-4 col-lg-4 col-md-4 col-sm-12 text-start">
						<div class="card">
							<div class="card-body m-4">
								<div class="row">
									<div class="col-10">
										<h6>Latest Payments</h6>
									</div>

									<div class="col-2 text-end text-decoration-none">
										<a href="#" class="">
											<i class="fa-solid fa-ellipsis-vertical text-dark"></i>
										</a>
									</div>
								</div>

								<div class="row">
									<div class="col chart-container m-4">
										Pie Chart Here
									</div>
								</div>
							</div>
						</div>
					</div>

					<!--Line Chart-->
					<div class="col-xxl-8 col-lg-8 col-md-8 col-sm-12 text-start">
						<div class="card">
							<div class="card-body m-4">
								<div class="row">
									<div class="col-10">
										<h6>Number of Registered Users</h6>
									</div>

									<div class="col-2 text-end text-decoration-none">
										<a href="#" class="">
											<i class="fa-solid fa-ellipsis-vertical text-dark"></i>
										</a>
									</div>
								</div>

								<div class="row">
									<div class="col chart-container m-4">
										Line Chart Here
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

