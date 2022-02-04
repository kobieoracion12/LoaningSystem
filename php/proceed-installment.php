<?php
require_once("database.php");
require_once("session.php");

$loan_amount = $_POST['loan-amount'];
$loan_period = $_POST['loan-duration'];
$loan_dest = $_POST['loan-dest'];
$bank_name = $_POST['bank-options'];
$overdue_penalty = '5%';
$recv_name = array(
    'acc-name'=>$_POST['acc-name'],
    'gcash-name'=>$_POST['gcash-name'],
    'palawan-name'=>$_POST['palawan-name'],
    'paymaya-name'=>$_POST['paymaya-name']
);
$recv_no = $_POST['gcash-no'];
$acc_no = $_SESSION['user-id'];

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = new mysqli('localhost','root','','loaning_system');
if($conn->connect_error){
    die('Installment Error : ' .$conn->connect_error);
}

else{
    $stmt = $conn->prepare("INSERT INTO loan_destination (acc_no, loan_amount, loan_period, loan_dest, bank_name, overdue_penalty, recv_name, recv_no) VALUES (?,?,?,?,?,?,?,?)");
    $stmt->bind_param("iisssssi",$acc_no, $loan_amount, $loan_period, $loan_dest, $bank_name, $overdue_penalty, $recv_name, $recv_no);
    $stmt->execute();
    header('location: new-installment.php?msg=installmentsuccess');
	exit();
}
?>