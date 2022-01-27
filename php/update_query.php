<?php
session_start();
require_once 'database.php';
 
 $id= $_SESSION['user-id'];

  if(isset($_POST['submit'])){
    
    $firstname = $_POST['user-first'];
    $lastname = $_POST['user-last'];
    $email = $_POST['user-email'];
    $mobile = $_POST['user-mobile'];
    $birthdate = $_POST['user-bday'];
    $age = $_POST['user-age'];
    $address = $_POST['user-add'];

    $sql = "UPDATE accounts SET first_name = '$firstname' WHERE acc_no = '$id'";
    $result = mysqli_query($config, $sql);

    if($result) {
        header ('location:accounts.php?success');
    } else {
        header ('location:accounts.php?gg');
    }
    mysqli_close($config);
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shiut</title>
</head>
<body>
<?php
    echo $_SESSION['user-id'];
?>
</body>
</html>