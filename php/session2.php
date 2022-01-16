<?php
include("database.php");
session_start();

$user_check = $_SESSION['user-details'];

$ses_sql = mysqli_query($query, "SELECT first_name FROM accounts WHERE username = '$user_check'");

$row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

$login_session = $row['username'];

if(!isset($_SESSION['user-details'])) {
	header("location: login.php");
	die();
}

?>