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
						<h2 class="text-white text-start ps-3">Loan Management</h2><br>
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
											<th scope="col">Loan Amount</th>
											<th scope="col">Payment Duration</th>
											<th scope="col">Action</th>
										</tr>
									</thead>

									<tbody>
										<tr>
											<th scope="row">1</th>
											<td>Kobie</td>
											<td>Oracion</td>
											<td>10000</td>
											<td>36 Months</td>
											<td>
												<div class="d-flex flex-row justify-content-center">
													<div>
									                	<input class="btn btn-primary text-white" type="button" name="delete-data" value="More Info" data-bs-toggle="modal" data-bs-target="#showUserData">
									                </div>

									                <div class="ps-2">
									                	<input class="btn btn-danger" type="button" name="delete-data" value="Delete">
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
											<h4>Loan Request Information</h4><br>
											<div class="row">
												<form class="form-control border-0" method="post" action="#">
													<div class="col">
														<div class="row">
															<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 py-2">
																<label for="ref-no" class="d-flex justify-content-start ps-3">Referrence Number</label>
																<input type="text" name="ref-no" id="ref-no" class="form-control" value="" readonly>
															</div>
														</div>

														<div class="row">
															<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 py-2">
																<label for="loan-amount" class="d-flex justify-content-start ps-3">Loan Amount</label>
																<input type="text" name="loan-amount" id="loan-amount" class="form-control" value="" readonly>
															</div>

															<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 py-2">
																<label for="loan-duration" class="d-flex justify-content-start ps-3">Loan Duration</label>
																<input type="text" name="loan-duration" id="loan-duration" class="form-control" value="Months" readonly>
															</div>
														</div>

														<div class="row">
															<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 py-2">
																<label for="loan-type" class="d-flex justify-content-start ps-3">Loan Type</label>
																<input type="text" name="loan-type" id="loan-type" class="form-control" value="" readonly>
															</div>

															<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 py-2">
																<label for="loan-destination" class="d-flex justify-content-start ps-3">Loan Destination</label>
																<input type="text" name="loan-destination" id="loan-destination" class="form-control" value="" readonly>
															</div>
														</div>

														<div class="row">
															<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 py-2">
																<label for="bank_name" class="d-flex justify-content-start ps-3">Bank Name</label>
																<input type="text" name="bank_name" id="bank_name" class="form-control" value="" readonly>
															</div>
														</div>

														<div class="row">
															<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 py-2">
																<label for="interest-rate" class="d-flex justify-content-start ps-3">Interest Rate(%)</label>
																<input type="text" name="interest-rate" id="interest-rate" class="form-control" value="" readonly>
															</div>

															<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 py-2">
																<label for="overdue-penalty" class="d-flex justify-content-start ps-3">Overdue Penalty(%)</label>
																<input type="text" name="overdue-penalty" id="overdue-penalty" class="form-control" value="" readonly>
															</div>
														</div>

														<hr>

														<div class="row">
															<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 py-2">
																<label for="receiver-name" class="d-flex justify-content-start ps-3">Receiver Name</label>
																<input type="text" name="receiver-name" id="receiver-name" class="form-control" value="" readonly>
															</div>

															<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 py-2">
																<label for="receiver-no" class="d-flex justify-content-start ps-3">Receiver Number/Account Number</label>
																<input type="text" name="receiver-no" id="receiver-no" class="form-control" value="" readonly>
															</div>
														</div>

														<div class="row">
															<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 py-2">
																<label for="date-requested" class="d-flex justify-content-start ps-3">Date Requested</label>
																<input type="date" name="date-requested" id="date-requested" class="form-control" value="" readonly>
															</div>
														</div>

														<div class="row">
															<div class="col">
																<br><br>
																<input class="btn btn-success w-25" type="button" name="approve-loan" value="Approve">
																<input class="btn btn-danger w-25" type="button" name="decline-loan" value="Decline">
																
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
