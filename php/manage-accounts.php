<?php
	include_once "session.php";
	include_once "userdata.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Manage Accounts</title>
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
						<h2 class="text-white text-start ps-3">User Management</h2><br>
					</div>
				</div>

				<!--Cards-->
				<div class="row">
					<?php
						$id = $_SESSION['user-id'];

						$sql = "SELECT * FROM accounts";
						$result = $config -> query($sql);

						if($result -> num_rows > 0) {
							while($row = $result -> fetch_assoc()) {

								$id = ['acc_no'];
								echo '
									<div class="col-xxl-4 col-lg-4 col-md-12 col-sm-12 mt-2">
										<a class="text-decoration-none editbtn" href="#" data-bs-toggle="modal" data-bs-target="#showAccount">
											<div class="card">
												<div class="card-body shadow">

													<div class="row">
														<div class="col-4">
															<img class="rounded-circle mx-auto d-block" src="../img/kobie.jpg" width="100px" height="100px">
														</div>

														<div class="col-8 text-start text-dark g-0 ps-3">
															<div class="container d-flex h-100">
																<div class="row justify-content-center align-self-center">
																	<h6><strong>'.$row["first_name"].' '.$row["last_name"].'</strong></h6>
																	<small>@'.$row["username"].'</small>
																	<small>'.$row["acc_priv"].'</small>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</a>
									</div>

									<div class="modal fade" id="showAccount" name="showAccount" aria-labelledby="editInformationLabel" aria-hidden="true">
										<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
											<div class="modal-content">
												<div class="modal-header">
													 
												</div>

												<div class="modal-body">
													<div class="container-fluid">
													
													</div>
												</div>
											</div>
										</div>
									</div>
								';
							} 
							
						} else {
							echo '
								<br>
								div class="alert alert-warning" role="alert">
						            No Records Found
						        </div>
							';
						}
						mysqli_close($config);
					?>			
				</div>

				<br>

				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-12">
										<img src="../img/kobie.jpg" class="img-fluid" max-width="400px">
									</div>

									<div class="col-xxl-8 col-lg-8 col-md-8 col-sm-12 text-start mt-3">
										<div class="row">
												<h3>Full Name Here</h3>
												<h6>Email Address Here</h6>
												<small>@Username Here</small>
										</div>

										<div class="row">
											<div class="col-12 pt-4">
												<ul class="nav nav-tabs" id="personal-tab" role="tablist">
													<li class="nav-item" role="presentation">
														<button class="nav-link active" id="personal-info" data-bs-toggle="tab" data-bs-target="#info" type="button" role="tab" aria-controls="info" aria-selected="true">
														<i class="fas fa-home me-1"></i>
														Personal Info
														</button>
													</li>

													<li class="nav-item" role="presentation">
														<button class="nav-link" id="personal-acc" data-bs-toggle="tab" data-bs-target="#acc" type="button" role="tab" aria-controls="acc" aria-selected="true">
														<i class="fas fa-home me-1"></i>
														Account
														</button>
													</li>
												</ul>
											</div>

											<div class="tab-content col-xxl-8 col-md-8 col-sm-12 ms-4 mt-3" id="myTabContent">
											  <div class="tab-pane fade show text-start active" id="info" role="tabpanel" aria-labelledby="home-tab">
											  	<h4>Personal Information</h4>

											  	<div class="row ms-3">
											  		<div class="col-xxl-4 col-lg-4 col-md-12 col-sm-12 pt-3">
												  		<h6>Full Name:</h6>
											  		</div>

											  		<div class="col-xxl-8 col-lg-8 col-md-12 col-sm-12 pt-3">
												  		<p>Kobie Oracion</p>
											  		</div>
											  	</div>

											  	<div class="row ms-3">
											  		<div class="col-xxl-4 col-lg-4 col-md-12 col-sm-12 pt-3">
												  		<h6>Email Address:</h6>
											  		</div>

											  		<div class="col-xxl-8 col-lg-8 col-md-12 col-sm-12 pt-3">
												  		<p>kobie.oracion12@gmail.com</p>
											  		</div>
											  	</div>

											  	<div class="row ms-3">
											  		<div class="col-xxl-4 col-lg-4 col-md-12 col-sm-12 pt-3">
												  		<h6>Mobile Number:</h6>
											  		</div>

											  		<div class="col-xxl-8 col-lg-8 col-md-12 col-sm-12 pt-3">
												  		<p>09976616289</p>
											  		</div>
											  	</div>

											  	<div class="row ms-3">
											  		<div class="col-xxl-4 col-lg-4 col-md-12 col-sm-12 pt-3">
												  		<h6>Birth Date:</h6>
											  		</div>

											  		<div class="col-xxl-8 col-lg-8 col-md-12 col-sm-12 pt-3">
												  		<p>July 12, 2000</p>
											  		</div>
											  	</div>

											  </div>

											  <div class="tab-pane fade" id="acc" role="tabpanel" aria-labelledby="profile-tab"></div>
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

