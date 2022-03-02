<?php
session_start();
include_once "conn.php";
$id=$_GET['e'];
$sql = "delete from Orders where id='$id'";
$result = mysqli_query($conn,$sql);
header('location:personal.php');
?>