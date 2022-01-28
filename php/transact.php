<?php
require_once("database.php");

$trans_type = $_POST['payment_method'];
$acc_no = $_POST['account_no'];
$acc_name = $_POST['account_name'];
$trans_amount = $_POST['amount_transfer'];


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = new mysqli('localhost','root','','loaning_system');
if($conn->connect_error){
    die('Payment Error : ' .$conn->connect_error);
}

else{
    $stmt = $conn->prepare("INSERT INTO trans_record (trans_type, acc_no, acc_name, trans_amount) VALUES (?,?,?,?)");
    $stmt->bind_param("sisi",$trans_type, $acc_no, $acc_name, $trans_amount);
    $stmt->execute();
    header('location: paynow.php?msg=paymentsuccess');
	exit();
}
?>
