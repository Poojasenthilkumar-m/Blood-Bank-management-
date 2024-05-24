​<?php
include "db.php";
    if (isset($_GET['name'])) {
    $name = $_GET['name'];
    $sql = "DELETE FROM donor_reg WHERE 'name' ='$name'";
     $result = $conn->query($sql);
     if ($result == TRUE) {
        echo "Record deleted successfully.";
        header('location: deleted.php');
    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
   }
?>