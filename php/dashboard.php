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
					<div class="col-xxl-4 col-lg-12 col-md-12 col-sm-12 py-2">
						<div class="card">
							<div class="card-body m-5">
								<h5 class="text-primary">Welcome to your Personal Dashboard</h5>
								<p>Browse our fully designed UI toolkit! Browse our prebuilt app pages, components, and utilites, and be sure to look at our full documentation!</p>
								<img src="../img/at-work.svg">
							</div>
						</div>
					</div>
					

					<!--Recent Messages Card-->
					<div class="col-xxl-4 col-lg-12 col-md-12 col-sm-12 py-2">
						<div class="card">
							<div class="card-header text-primary text-start ps-4">
								Recent Messages
							</div>

							<div class="list-group py-2 text-start">
								<a href="#" class="list-group-item list-group-item-action" aria-current="true">
									<div class="d-flex w-100 justify-content-between">
										<h6 class="mb-1">List Group Item Heading</h6>
										<small>3 days ago</small>
									</div>
									<p class="mb-1">Some placeholder content in a paragraph.</p>
									<small>Add some small print.</small>
								</a>

								<a href="#" class="list-group-item list-group-item-action">
									<div class="d-flex w-100 justify-content-between">
										<h6 class="mb-1">List Group Item Heading</h6>
										<small>3 days ago</small>
									</div>
									<p class="mb-1">Some placeholder content in a paragraph.</p>
									<small>Add some small print.</small>
								</a>

								<a href="#" class="list-group-item list-group-item-action">
									<div class="d-flex w-100 justify-content-between">
										<h6 class="mb-1">List Group Item Heading</h6>
										<small>3 days ago</small>
									</div>
									<p class="mb-1">Some placeholder content in a paragraph.</p>
									<small>Add some small print.</small>
								</a>

								<a href="#" class="list-group-item list-group-item-action">
									<div class="d-flex w-100 justify-content-between">
										<h6 class="mb-1">List Group Item Heading</h6>
										<small>3 days ago</small>
									</div>
									<p class="mb-1">Some placeholder content in a paragraph.</p>
									<small>Add some small print.</small>
								</a>
							</div>
						</div>
					</div>

					<!--Progress Card-->
					<div class="col-xxl-4 col-lg-12 col-md-12 col-sm-12 py-2">
						<div class="card">
							<div class="card-header text-primary text-start ps-4">
								Progress Tracker
							</div>

							<div class="card-body">
								<div class="row text-start">
									<div class="col">
										<label for="prog1" class="form-label">Progress 1</label>
									</div>

									<div class="col text-end">
										0%
									</div>
								</div>
								<div class="progress">
								  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="prog1"></div>
								</div>

								<br>

								<div class="row text-start">
									<div class="col">
										<label for="prog1" class="form-label">Progress 2</label>
									</div>

									<div class="col text-end">
										25%
									</div>
								</div>
								<div class="progress">
								  <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" id="prog1"></div>
								</div>

								<br>
								
								<div class="row text-start">
									<div class="col">
										<label for="prog1" class="form-label">Progress 3</label>
									</div>

									<div class="col text-end">
										50%
									</div>
								</div>
								<div class="progress">
								  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" id="prog1"></div>
								</div>

								<br>
								
								<div class="row text-start">
									<div class="col">
										<label for="prog1" class="form-label">Progress 4</label>
									</div>

									<div class="col text-end">
										75%
									</div>
								</div>
								<div class="progress">
								  <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" id="prog1"></div>
								</div>

								<br>
								
								<div class="row text-start">
									<div class="col">
										<label for="prog1" class="form-label">Progress 5</label>
									</div>

									<div class="col text-end">
										99%
									</div>
								</div>
								<div class="progress">
								  <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" id="prog1"></div>
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

