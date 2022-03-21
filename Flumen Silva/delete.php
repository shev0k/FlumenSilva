<?php
    session_start();

    require_once("config.php");

    $name = $_POST["username"];
    $sql = "DELETE FROM users WHERE username = '$name'";
    
    if ($link->query($sql) === TRUE) {
      echo "Record deleted successfully";
      header("location: logout.php");
    } else {
      echo "Error deleting record: " . $conn->error;
    }
?>