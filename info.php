<?php

header("Content-Type:text/html;charset=utf-8");

$tname = trim($_POST['name']);
$phone = trim($_POST['phone']);
$idc = trim($_POST['idc']);
$address = trim($_POST['address']);
session_start();

include_once "conn.php";

//判断用户名是否被占用

$user=$_SESSION['uid'];

$sql = "UPDATE info SET tname='$tname', phone='$phone',idc='$idc',address='$address' WHERE name='$user'";
$result = mysqli_query($conn, $sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
echo "上页的地址为:".$_SERVER["HTTP_REFERER"] ;
echo "<script type='text/javascript'>alert('信息已修改');history.go(-1)</script>";