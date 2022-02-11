<?php
require_once("database.php");
require_once("session.php");

// ITEXMO API
function itexmo($recv_no,$message,$apicode,$passwd){
    $url = 'https://www.itexmo.com/php_api/api.php';
    $itexmo = array('1' => $recv_no, '2' => $message, '3' => $apicode, 'passwd' => $passwd);
    $param = array(
      'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($itexmo),
      ),
    );
    $context  = stream_context_create($param);
    return file_get_contents($url, false, $context);
}

if (isset($_POST['submit'])) {
    $acc_no = $_SESSION['user-id'];
    $loan_amount = $_POST['loan-amount'];
    $loan_period = $_POST['loan-duration'];
    $loan_type = $_POST['loan-type'];
    $loan_dest = $_POST['loan-dest'];

    $bank_name = '';
    switch($loan_dest) {
        case 'Bank Transfer':
            $bank_name = $_POST['bank-options'];
            break;

        default:
            $bank_name = null;
            break;
    }

    $overdue_penalty = '5%';

    $interest_rate = null;
    switch($loan_amount) {
        case in_array($loan_amount, range(2000,3000)):
            $interest_rate = "3%";
            break;

        case in_array($loan_amount, range(4000,7000)):
            $interest_rate = "4%";
            break;

        case in_array($loan_amount, range(8000,10000)):
            $interest_rate = "5%";
            break;
    }

    $recv_name = '';
    switch($loan_dest) {
        case 'Bank Transfer':
            $recv_name = $_POST['acc-name'];
            break;

        case 'GCash':
            $recv_name = $_POST['gcash-name'];
            break;

        case 'Palawan Pera Padala':
            $recv_name = $_POST['palawan-name'];
            break;

        case 'PayMaya':
            $recv_name = $_POST['paymaya-name'];
            break;
    }

    $recv_no = '';
    switch($loan_dest) {
        case 'Bank Transfer':
            $recv_no = $_POST['acc-no'];
            break;

        case 'GCash':
            $recv_no = $_POST['gcash-no'];
            break;

        case 'Palawan Pera Padala':
            $recv_no = $_POST['palawan-no'];
            break;

        case 'PayMaya':
            $recv_no = $_POST['paymaya-no'];
            break;
    }

    $message = "We recieved your loan application, please wait as we review your request!
    ";

    $api = "TR-PORNE355250_RUQQB";
    $ApiPassword = "a&!qu8p62$";
    $text = $message;


    $result = itexmo($recv_no,$text,$api,$ApiPassword);

    if ($result == "") {
        header("Location: new-installment.php?itextmo=error");
    }

    elseif ($result == 0) {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        if($config->connect_error) {
            die('Installment Error : ' .$config->connect_error);
        }

        else {
            $stmt = $config->prepare("INSERT INTO loan_destination (acc_no, loan_amount, loan_period, loan_type, loan_dest, bank_name, interest_rate, overdue_penalty, recv_name, recv_no) VALUES (?,?,?,?,?,?,?,?,?,?)");

            $stmt->bind_param("iisssssssi",$acc_no, $loan_amount, $loan_period, $loan_type, $loan_dest, $bank_name, $interest_rate, $overdue_penalty, $recv_name, $recv_no);

            $stmt->execute();
            header('location: new-installment.php?installmentsuccess');
        }
    }

    else {
        //echo "Error Num ". $result . " was encountered!";
        header("Location: new-installment.php?itextmo=rejected");
    }

    mysqli_close($config);
}


?>