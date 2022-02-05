<?php
	include_once "session.php";
	include_once "userdata.php";
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

<div class="container-fluid">
	<div class="row flex-nowrap">
		<!--Navigation Sidebar-->
		<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-white shadow">
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
                                <?php
                                	$status = $_SESSION['status'];
                                	if($status == 'Active' || $status == 'Due' || $status == 'Terminated') {
                                		echo '
                                		<span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Disabled popover">
	                                		<a href="new-installment.php" class="nav-link px-0 disabled">
			                                	<span class="d-none d-sm-inline">New Installment</span>
			                                </a>
		                                </span>
                                		';
                                	} else {
                                		echo '
                                		<a href="new-installment.php" class="nav-link px-0">
		                                	<span class="d-none d-sm-inline">New Installment</span>
		                                </a>';
                                	}
                                ?>
                            </li>
                            
                            <li>
                                <a href="transactions.php" class="nav-link px-0">
                                	<span class="d-none d-sm-inline">Transaction Record</span>
                                </a>
                            </li>

                            <li>
                            	<?php 
                            		$status = $_SESSION['status'];
                                	if($status == 'Active' || $status == 'Due' || $status == 'Terminated') {
                                		echo '
                                			<a href="paynow.php" class="nav-link px-0">
			                                	<span class="d-none d-sm-inline">Pay Now</span>
			                                </a>
                                		';
                                	} else {
                                		echo '
                                			<a href="paynow.php" class="nav-link px-0 disabled">
			                                	<span class="d-none d-sm-inline">Pay Now</span>
			                                </a>
                                		';
                                	}

                            	?>
                                
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
		<div class="col d-flex justify-content-center overflow-hidden g-0">
			<div class="container-fluid g-0">

				<!--Carousel-->
				<div class="row">
					<div class="col">
						<div id="welcome-carousel" class="carousel slide" data-bs-ride="carousel">
							<div class="carousel-indicators" role="listbox" style="width:auto;">
								<button type="button" data-bs-target="#welcome-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>

								<button type="button" data-bs-target="#welcome-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>

								<button type="button" data-bs-target="#welcome-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>

								<button type="button" data-bs-target="#welcome-carousel" data-bs-slide-to="3" aria-label="Slide 3"></button>
								<button type="button" data-bs-target="#welcome-carousel" data-bs-slide-to="4" aria-label="Slide 3"></button>
							</div>

							<div class="carousel-inner" role="listbox">
								<div class="carousel-item active">
									<img src="../img/car-pl.jpg" class="d-block w-100">
								</div>

								<div class="carousel-item">
									<img src="../img/car-cc.jpg" class="d-block w-100">
								</div>

								<div class="carousel-item">
									<img src="../img/car-he.jpg" class="d-block w-100">
								</div>

								<div class="carousel-item">
									<img src="../img/car-sb.jpg" class="d-block w-100">
								</div>

								<div class="carousel-item">
									<img src="../img/car-sl.jpg" class="d-block w-100">
								</div>
							</div>
						</div>
					</div>
				</div>

				<!--Text Middle-->
				<div class="row">
					<div class="col-xxl-4 col-lg-4 col-md-12 col-sm-12 bg-light p-5">
							<h4 class="pt-5 text-primary"><strong>
								Loans up to PHP 10,000!<br>
								as soon as next day
							</strong></h4>
							<small>No impact on anything</small>
						</div>

						<div class="col-xxl-4 col-lg-4 col-md-12 col-sm-12 bg-light p-5">
							<h4 class="pt-5 text-primary"><strong>
								Get Personal<br>
								Loan Offers
							</strong></h4>
							<small>No impact on anything</small>
						</div>

						<div class="col-xxl-4 col-lg-4 col-md-12 col-sm-12 bg-light p-5">
							<h4 class="pt-5 text-primary"><strong>
								Low Interest Rates<br>
								Starting at 3% APR
							</strong></h4>
							<small>No impact on anything</small>
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

