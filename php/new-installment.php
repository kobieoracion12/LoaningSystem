<?php
	include_once "session.php";
	include_once "userdata.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>New Installment</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../jquery-ui/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="../css/style-min.css">
	<link rel="stylesheet" type="text/css" href="../css/fontawesome.css">
	<link rel="stylesheet" type="text/css" href="../css/brands.css">
	<link rel="stylesheet" type="text/css" href="../css/solid.css">
</head>
<body>

<div class="container-fluid">
	<div class="row flex-nowrap">
	<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-white shadow">
			<!--Navigation Sidebar-->
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
		<div class="col py-3 d-flex justify-content-center overflow-auto">
			<div class="container-fluid">
				<div class="row">
					<div class="col">
						<br>
						<h2 class="text-white text-start ps-3">New Installment</h2><br>
					</div>
				</div>

				<!--Installment Form-->
				<div class="row">
					<div class="col py-1">
						<div class="p-4 bg-white shadow-4 rounded-3">
							<form action="proceed-installment.php" method="post" enctype="multipart/form-data">
								<div class="row">

									<!--Loan Information-->
									<div class="col-xxl-4 col-lg-4 col-md-12 col-sm-12 text-start overflow-auto">
										<?php
							              if(isset($_GET['installmentsuccess'])) {
							                echo '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
							                      	Loan request submitted!
							                      	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							                      </div>';
							              }
							             ?>
										<h5 class="ps-2">Loan Information</h5>

										<label class="px-2 py-2" for="loan-amount">Loan Amount</label>
										<input class="form-control px-3" type="number" name="loan-amount" id="loan-amount" placeholder="0.00">
										<small class="fw-lighter fst-italic px-3">PHP 2,000 Max for New Users</small><br>

										<label class="px-2 py-2 pt-3" for="loan-duration">Installment Duration</label>
										<select class="form-select" id="loan-duration" name="loan-duration">
											<option selected></option>
										 	<option value="2">2 Months</option>
										 	<option value="6">6 Months</option>
										 	<option value="12">12 Months</option>
										 	<option value="24">24 Months</option>
										 	<option value="36">36 Months</option>
										</select>

										<label class="px-2 py-2 pt-3" for="loan-type">Loan Type	</label>
										<select class="form-select" id="loan-type" name="loan-type">
											<option selected></option>
										 	<option value="Credit Card">Credit Card</option>
										 	<option value="Home Equity">Home Equity</option>
											<option value="Mortgage">Mortgages</option>
											<option value="Personal Loans">Personal Loans</option>
											<option value="Small Business">Small Business</option>
											<option value="Student Loans">Student Loans</option>
										</select>

										<br><hr><br>

										<h5 class="ps-2">Account Information</h5>

										<label class="px-2 py-2 pt-3" for="loan-dest">Loan Destination</label>
										<select class="form-select" id="loan-dest" name="loan-dest">
											<option selected></option>
											<option value="Bank Transfer">Bank Transfer</option>
										 	<option value="GCash">GCash</option>
											<option value="Palawan Pera Padala">Palawan Pera Padala</option>
										 	<option value="PayMaya">PayMaya</option>
										</select><br>

										<script type="text/javascript">
											document.getElementById('loan-dest').addEventListener('change', function() {
												var style = this.value == 'Bank Transfer' ? 'block' : 'none';
												document.getElementById('show-bank').style.display = style;

												var style = this.value == 'GCash' ? 'block' : 'none';
												document.getElementById('show-gcash').style.display = style;

												var style = this.value == 'Palawan Pera Padala' ? 'block' : 'none';
												document.getElementById('show-palawan').style.display = style;

												var style = this.value == 'PayMaya' ? 'block' : 'none';
												document.getElementById('show-paymaya').style.display = style;
											});
										</script>

										<!--Bank Transfer-->
										<div id="show-bank" class="show-bank" style="display: none">
											<label class="px-2 py-2" for="bank-options">Bank Name</label>
												<select class="form-select" id="bank-options" name="bank-options">
												<option selected>Select Bank</option>
												<option value="Asia United Bank">Asia United Bank</option>
											 	<option value="Bank of China">Bank of China</option>
												<option value="BDO">BDO</option>
												<option value="BPI">BPI</option>
											 	<option value="CitiBank">CitiBank</option>
												<option value="City Savings Bank">City Savings Bank</option>
												<option value="Landbank">Landbank</option>
												<option value="MetroBank">MetroBank</option>
												<option value="Philippine National Bank">Philippine National Bank</option>
												<option value="rcbc">RCBC</option>
											</select><br>

											<div class="col">
												<label class="px-2 py-2" for="acc-no">Account Number</label>
												<input class="form-control px-3" type="text" name="acc-no" id="acc-no">

												<label class="px-2 py-2" for="acc-name">Receiver Name</label>
												<input class="form-control px-3" type="text" name="acc-name" id="acc-name">
											</div>

											<br>

											<input type="submit" name="submit" class="btn btn-primary w-100" value="Proceed">
										</div>

										<!--GCASH-->
										<div id="show-gcash" class="show-gcash" style="display: none">
											<div class="col">
												<label class="px-2 py-2" for="gcash-name">Receiver Name</label>
												<input class="form-control px-3" type="text" name="gcash-name" id="gcash-name">

												<label class="px-2 py-2" for="gcash-no">Mobile Number</label>
												<input class="form-control px-3" type="text" name="gcash-no" id="gcash-no" placeholder="09xxxxxxxx">
											</div>

											<br>

											<input type="submit" name="submit" class="btn btn-primary w-100" value="Proceed">
										</div>

										<!--Palawan-->
										<div id="show-palawan" class="show-palawan" style="display: none">
											<div class="col">
												<label class="px-2 py-2" for="palawan-name">Receiver Name</label>
												<input class="form-control px-3" type="text" name="palawan-name" id="palawan-name">

												<label class="px-2 py-2" for="palawan-no">Mobile Number</label>
												<input class="form-control px-3" type="text" name="palawan-no" id="palawan-no" placeholder="09xxxxxxxx">

												<label class="px-2 py-2" for="palawan-dest">Destination Branch (optional)</label>
												<input class="form-control px-3" type="text" name="palawan-dest" id="palawan-dest">
											</div>

											<br>

											<input type="submit" name="submit" class="btn btn-primary w-100" value="Proceed">
										</div>

										<!--Paymaya-->
										<div id="show-paymaya" class="show-paymaya" style="display: none">
											<div class="col">
												<label class="px-2 py-2" for="paymaya-name">Receiver Name</label>
												<input class="form-control px-3" type="text" name="paymaya-name" id="palawan-name">

												<label class="px-2 py-2" for="paymaya-no">Account Number</label>
												<input class="form-control px-3" type="text" name="paymaya-no" id="paymaya-no" placeholder="09xxxxxxxx">
											</div>

											<br>

											<input type="submit" name="submit" class="btn btn-primary w-100" value="Proceed">
										</div>
									</div>	

									<!--Loan Status-->
									<div class="col-xxl-8 col-lg-8 col-md-12 col-sm-12">
										<table id="trans-table" class="table table-hover table-responsive align-middle table-bordered">
											<thead>
												<th scope="col">#</th>
												<th scope="col">Plan</th>
												<th scope="col">Status</th>
											</thead>

											<tbody>
												<?php
													$id = $_SESSION['user-id'];

													$sql = "SELECT * FROM loan_destination WHERE acc_no = '$id' ORDER BY ref_no	 DESC";
													$result = $config -> query($sql);

													

													if($result -> num_rows > 0) {
														while($row = $result -> fetch_assoc()) {
															
															$getdate = $row['date_req'];
															$date = date('F j, Y', strtotime('+1 month', strtotime($getdate)));

															echo '
																<tr>
																<th scope="row">'.$row["acc_no"].'</th>
																<td class="ps-4 text-start">
																	<h6>Years/Months: '.$row["loan_period"].' Months</h6>
																	<small class="fw-light text-center">Ref #: <strong>'.$row["ref_no"].'</strong></small><br>
																	<small class="fw-light text-center">Remaining Balance: <strong>₱'.$row["loan_amount"].'</strong></small><br>
																	<small class="fw-light">Next Due: <strong>'.$date.'</strong></small><br>
																</td>
															';

															$status = $row["loan_status"];
															if($status == 'Approved') {
																echo '
																	<td class="table-success fw-bold text-success">
																	'.$status.'	
																	</td>
																';
															}

															elseif($status == 'Declined') {
																echo '
																	<td class="table-danger fw-bold text-danger">
																	'.$status.'	
																	</td>
																';
															}

															elseif($status == 'Closed') {
																echo '
																	<td class="table-danger fw-bold text-secondary">
																	'.$status.'	
																	</td>
																';
															}

															elseif($status == 'Pending') {
																echo '
																	<td class="table-secondary fw-bold text-secondary">
																	'.$status.'	
																	</td>
																';
															}

															elseif($status == 'Terminated') {
																echo '
																	<td class="table-warning fw-bold text-warning">
																	'.$status.'	
																	</td>
																';
															}
															
														}
													} else {
														echo '
															<br>
															<div class="alert alert-warning" role="alert">
										                      No Records Found
										                    </div>
														';
													}
													mysqli_close($config);
												?>
											</tbody>
										</table>

									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="../js/mdb.min.js"></script>
<script type="text/javascript" src="../jquery-ui/jquery-ui.js"></script>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.1.0.js"></script>
</body>
</html>

