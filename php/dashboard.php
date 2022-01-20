<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
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
							<li class="nav-item nav-list">
								<a class="nav-link active" href="dashboard.php">
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
								<a class="nav-link" href="account.php">
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
	 	<div class="col-7 g-4 main-content">
	 		<div class="container-fluid">
	 			<h3 class="text-light"><strong>Dashboard</strong></h3><br>

	 		</div>
	 	</div>

	 	<!--Right Sidebar-->
	 	<div class="col g-0">
	 		<div class="container g-4">
				<div class="row flex-nowrap g-0">
					<div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-white nav-width shadow p-3 mb-5 bg-body rounded-0">
						<a href="#" class="d-flex align-items-center flex-shrink-0 p-3 link-dark text-decoration-none border-bottom">
							<span class="fs-5 fw-semibold"><strong>Messages</strong></span>
						</a>

						<div class="list-group list-group-flush border-bottom overflow-auto">
							<a href="#" class="list-group-item list-group-item-action py-3 lh-tight
							">
								<div class="d-flex w-100 align-items-center justify-content-between text-start">
									<strong class="mb-1">Congratulations!</strong>
									<small class="text-muted">Today</small>
								</div>

								<div class="col-12 mb-1 small text-start">Welcome to the the JNK Loaning Corp. Family! Start your loaning today!</div>
							</a>

							<a href="#" class="list-group-item list-group-item-action py-3 lh-tight
							">
								<div class="d-flex w-100 align-items-center justify-content-between text-start">
									<strong class="mb-1">Have a Joyous Holiday!</strong>
									<small class="text-muted">Dec 12</small>
								</div>

								<div class="col-12 mb-1 small text-start">We from the JNK Loaning Corp. wanna wish you a joyous and posporous holidays!</div>
							</a>

							<a href="#" class="list-group-item list-group-item-action py-3 lh-tight
							">
								<div class="d-flex w-100 align-items-center justify-content-between text-start">
									<strong class="mb-1">Scary Good Deals Awaits!</strong>
									<small class="text-muted">Oct 29</small>
								</div>

								<div class="col-12 mb-1 small text-start">Get awesome deals when you buy a Snuggle Society partner or trio pack from October 29 to November 1, 2021. </div>
							</a>

							<a href="#" class="list-group-item list-group-item-action py-3 lh-tight
							">
								<div class="d-flex w-100 align-items-center justify-content-between text-start">
									<strong class="mb-1">10.10 at Lazada Promo!</strong>
									<small class="text-muted">Oct 2</small>
								</div>

								<div class="col-12 mb-1 small text-start">Get up to 90% off on your favorite brands. 10.10 sale is happening from Oct 10 to 14. Top up your Lazada Wallet now!</div>
							</a>

							<a href="#" class="list-group-item list-group-item-action py-3 lh-tight
							">
								<div class="d-flex w-100 align-items-center justify-content-between text-start">
									<strong class="mb-1">Get Your Coffee Fix at 0% Interest</strong>
									<small class="text-muted">Sept 27</small>
								</div>

								<div class="col-12 mb-1 small text-start">Shop coffee beans, machines, filters, and gourmet syrups from Blu Coffee Distributor and enjoy a ZERO-INTEREST installment plan with JNK.</div>
							</a>
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