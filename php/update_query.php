<?php
session_start();
require_once 'database.php';
 
 $id= $_SESSION['user-id'];
  if(ISSET($_POST['submit'])){
    
    $firstname = $_POST['user-first'];
    $lastname = $_POST['user-last'];
    $email = $_POST['user-email'];
    $mobile = $_POST['user-mobile'];
    $birthdate = $_POST['user-bday'];
    $age = $_POST['user-age'];
    $address = $_POST['user-add'];

$sql = "UPDATE `accounts` SET `first_name` = '$firstname'  WHERE `acc_no` = '$id'";

if(mysqli_query($config, $sql)){
    header ('location:accounts.php?success');
} else {
     header ('location:accounts.php?error');

}
}
    
?>