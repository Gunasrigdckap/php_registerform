<?php
require "./model/DB.php";
session_start();

$id = $_GET['id'];

$sql = "DELETE FROM registerTable WHERE id='$id'";

$result = $conn->query($sql);

if ($result == true) {
    echo "<script type='text/javascript'>
            alert('Record deleted successfully');
            window.location.href = 'userdetails.php';
          </script>";
    exit();
} else {
    echo "<script type='text/javascript'>
            alert('Record not deleted successfully');
          </script>";
}