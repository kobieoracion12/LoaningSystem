<?php
require_once("database.php");
require_once("session.php");

$id = $_SESSION['user-id'];
$amount = $_POST['loan-amount'];
$period = $_POST['loan-duration'];
$destination = $_POST['loan-dest'];
$bank = $_POST['bank-options'];
$interest = null;
$penalty = '5%';
$name = null;
$number = null;
$status = 'Pending';

#Interest Graph
switch($amount) {
    case in_array($amount, range(2000,3000)):
        $interest = "3%";
        break;

    case in_array($amount, range(4000,7000)):
        $interest = "4%";
        break;

    case in_array($amount, range(8000,10000)):
        $interest = "5%";
        break;
}

#Name 
switch($destination) {
    case 'bank':
        $number = $_POST['acc-name'];
        break;

    case 'gcash':
        $number = $_POST['gcash-name'];
        break;

    case 'palawan':
        $number = $_POST['palawan-name'];
        break;

    case 'paymaya':
        $number = $_POST['paymaya-name'];
        break;
}

#Account Number 
switch($destination) {
    case 'bank':
        $number = $_POST['acc-no'];
        break;

    case 'gcash':
        $number = $_POST['gcash-no'];
        break;

    case 'palawan':
        $number = $_POST['palawan-no'];
        break;

    case 'paymaya':
        $number = $_POST['paymaya-no'];
        break;
}


$sql = "INSERT INTO loan_destination (loan_amount, loan_period, loan_dest, bank_name, interest_rate, overdue_penalty, recv_name, recv_no, loan_status) VALUES ($amount, $period, $destination, $bank, $interest, $penalty, $name, $number, $status) WHERE acc_no = '$id'";

if(mysqli_query($config, $sql)) {
    header("loaction: new-installlment.php?success");
} else {
    header("loaction: new-installlment.php?failed");
}
?>