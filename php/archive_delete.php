<?php
include"database.php";

if (isset($_POST['deletedata'])) {

    // sql to delete a record
    $id=$_POST['delete_id'];
    $sql = "UPDATE loan_destination SET loan_status ='Archived' WHERE ref_no='$id'";

    if ($config->query($sql) === TRUE) {
      header("location:loan-management.php?success");
    } 
    else {
      echo "Error deleting record: " . $config->error;
    }

}

$config->close();

?>