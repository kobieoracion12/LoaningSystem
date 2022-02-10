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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
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
						<a href="home.php" class="nav-link align-middle px-0 text-wrap">
							<i class="fas fa-regular fa-home bi me-2"></i>	
							<span class="d-none d-sm-inline fw-bold">Home</span>
						</a>
					</li>

					 <li class="nav-item nav-list">
                        <a href="#install" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fas fa-regular fa-credit-card bi me-2"></i> <span class="ms-1 d-none d-sm-inline fw-bold">Installment</span> </a>
                        <ul class="collapse show nav flex-column ms-1 text-start" id="install" data-bs-parent="#menu">
                            <li class="w-100">
                                <?php
                                	$status = $_SESSION['stats'];
                                	if($status == 'Terminated') {
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
                            		$status = $_SESSION['stats'];
                                	if($status == 'New' || $status == 'Repeat' || $status == 'Loyal' || $status == 'Terminated') {
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
		<div class="col d-flex justify-content-center overflow-auto pt-5">
			<div class="container-fluid">

				<!--Header-->
				<div class="row">

					<!--Left Side-->
					<div class="col-xxl-8 col-lg-8 col-md-12 col-sm-12 d-flex align-items-stretch">
						<div class="card">
							<div class="card-body m-4 text-start">
								<div class="row">
									<div class="col">
										<p>Welcome to your Personal Homepage</p>
									</div>
								</div>

								<div class="row">
									<div class="col">
										<h4>Track your expenses and enjoy feature for managing payment easily!</h4>
									</div>
								</div>

								<div class="row mt-3">
									<div class="col">
										<input class="btn btn-warning text-white" type="button" value="Choose Plan">
									</div>
								</div>
							</div>
						</div>
					</div>

					<!--Right Side-->
					<div class="col-xxl-4 col-lg-4 col-md-12 col-sm-12 d-flex align-items-stretch">
						<div class="card">
							<div class="card-body m-4 text-start">
								<div class="row">
									<div class="col">
										<p>Statistic</p>
									</div>
								</div>

								<div class="row">
									<div class="col">
										<h4>Track your expenses and enjoy feature for managing payment easily!</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					<p></p>
					<div class=" "style="width:800px; margin:0 auto">
						<div class="row">
							<div class="col" >
								<div class="card">
									<div class="card-body" >
										<?php
								$conn = new mysqli('localhost','root','','loaning_system');

								$result =  mysqli_query($conn,"SELECT COUNT(*) as loan_type FROM loan_destination WHERE loan_type ='Student Loans'");

								$result2 =  mysqli_query($conn,"SELECT COUNT(*) as loan_type FROM loan_destination WHERE loan_type ='Mortgages'");

								$result3 =  mysqli_query($conn,"SELECT COUNT(*) as loan_type FROM loan_destination WHERE loan_type ='Credit Card'");
								

								while($row=mysqli_fetch_array($result))
								{
									$loan_type=$row['loan_type'];
									
								}
								while($row=mysqli_fetch_array($result2))
								{
									$loan_type2=$row['loan_type'];
									
								}
								while($row=mysqli_fetch_array($result3))
								{
									$loan_type3=$row['loan_type'];
									
								}


								?>
								<div>
									<canvas id="myChart" style="width:100%; height:400px;"></canvas>
								</div>
										<script>
												var xValues = ["Student Loans",
																"Credit Card",
																"Mortgages"];

												new Chart("myChart", {
												  type: "doughnut",
												  data: {
												    labels: xValues,
												    datasets:  [{
										data: [<?php echo json_encode($loan_type)?>,<?php echo json_encode($loan_type2)?>,<?php echo json_encode($loan_type3)?>],
										backgroundColor: [
										'rgb(255, 99, 132)',
										'rgb(54, 162, 235)',
										'rgb(255, 205, 86)'
										],
										hoverOffset: 4
									}]
												  },
												  options: {
												    title: {
												      display: true,
												      text: "TOTAL OF LOANS"
												    }
												  }
												});
												</script>

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

