<?php
	include_once "session.php";
	include_once "userdata.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Manage Clients</title>
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
						<h2 class="text-white text-start ps-3">Management Accounts</h2><br>
					</div>
				</div>

				<div class="row">
					<div class="col ">
						<div class="card">
							<div class="card-body rounded-3 m-4 table-responsive-sm">
								<table class="table table-hover align-middle">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">First Name</th>
											<th scope="col">Last Name</th>
											<th scope="col">Username</th>
											<th scope="col">Privilege</th>
											<th scope="col">Action</th>
										</tr>
									</thead>

									<tbody>
										<tr>
											<th scope="row">1</th>
											<td>Kobie</td>
											<td>Oracion</td>
											<td>admin</td>
											<td>Admin</td>
											<td>
												<div class="d-flex flex-row justify-content-center">
									                 <div>
									                	<input class="btn btn-primary" type="button" name="edit-user" value="Edit"  value="More Info" data-bs-toggle="modal" data-bs-target="#showUserData">
									                </div>

									                <div class="ps-2">
									                	<input class="btn btn-danger" type="button" name="delete-user" value="Delete">
									                </div>

									                <div class="ps-2">
									                </div>
									            </div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div class="modal fade" id="showUserData" tabindex="-1" aria-labelledby="showUserData" aria-hidden="true">
							<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>

									<div class="modal-body m-5">
										<div class="container-fluid">
											<h4>Account Information</h4><br>
											<div class="row">
												<form class="form-control border-0" method="post" action="#">
													<div class="col">
														<div class="row">
															<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 py-2">
																<label for="acc-no" class="d-flex justify-content-start ps-3">Account Number</label>
																<input type="text" name="acc-no" id="acc-no" class="form-control" value="" readonly>
															</div>
														</div>

														<div class="row">
															<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 py-2">
																<label for="fname" class="d-flex justify-content-start ps-3">First Name</label>
																<input type="text" name="fname" id="fname" class="form-control" value="">
															</div>

															<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 py-2">
																<label for="lname" class="d-flex justify-content-start ps-3">Last Name</label>
																<input type="text" name="lname" id="lname" class="form-control" value="">
															</div>
														</div>

														<div class="row">
															<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 py-2">
																<label for="email-add" class="d-flex justify-content-start ps-3">Email Address</label>
																<input type="text" name="email-add" id="email-add" class="form-control" value="">
															</div>

															<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 py-2">
																<label for="mobile-no" class="d-flex justify-content-start ps-3">Mobile Number</label>
																<input type="text" name="mobile-no" id="mobile-no" class="form-control" value="">
															</div>
														</div>

														<div class="row">
															<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 py-2">
																<label for="birth-date" class="d-flex justify-content-start ps-3">Birth Date</label>
																<input type="date" name="birth-date" id="birth-date" class="form-control" value="">
															</div>

															<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 py-2">
																<label for="age" class="d-flex justify-content-start ps-3">Age</label>
																<input type="text" name="age" id="age" class="form-control" value="">
															</div>
														</div>

														<div class="row">
															<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 py-2">
																<label for="user-address" class="d-flex justify-content-start ps-3">Address</label>
																<textarea class="form-control" name="user-address" id="user-address" rows="3"></textarea>
															</div>
														</div>

														<hr>

														<div class="row">
															<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 py-2">
																<label for="user-name" class="d-flex justify-content-start ps-3">Username</label>
																<input type="text" name="user-name" id="user-name" class="form-control" value="">
															</div>

															<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 py-2">
																<label for="user-pass" class="d-flex justify-content-start ps-3">Password</label>
																<input type="text" name="user-pass" id="user-pass" class="form-control" value="ENCRYPTED DAPAT">
															</div>

															<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 py-2">
																<label for="user-priv" class="d-flex justify-content-start ps-3">Privilege</label>
																<select class="form-select" id="user-priv" name="user-priv">
																	<option selected></option>
																 	<option value="Admin">Admin</option>
																 	<option value="User">User</option>
																</select>
															</div>
														</div>

														<div class="row">
															<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 py-2">
																<label for="date-registered" class="d-flex justify-content-start ps-3">Registered Date</label>
																<input type="date" name="date-registered" id="date-registered" class="form-control" value="" readonly>
															</div>
														</div>

														<div class="row">
															<div class="col">
																<br><br>
																<input class="btn btn-primary w-25" type="button" name="save-changes" value="Save">
																<input class="btn btn-danger w-25" type="button" name="delete-account" value="Delete">
																
															</div>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>

									<div class="modal-footer">
										<input class="btn btn-secondary" type="button" data-bs-dismiss="modal" value="Close">
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

