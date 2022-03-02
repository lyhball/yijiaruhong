<?php
header("Content-Type:text/html;charset=utf-8");

$name = trim($_POST['name']);
$pw = trim($_POST['pw']);
$cpw = trim($_POST['cpw']);

include_once "conn.php";

//判断用户名是否被占用
$sql = "select * from info where name = '$name'";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);

if($num){
    echo "<script>alert('此用户名已经被占用，请返回重新输入');history.back();</script>";
}
else if(!preg_match('/^[a-zA-Z0-9_*]{6,20}$/',$pw)) {
    echo "<script type='text/javascript'>history.go(-1)</script>";
    exit;
}
else if($pw!=$cpw)
{
    echo "<script type='text/javascript'>history.go(-1)</script>";
    exit;
}
else
{
    $sql2 = "insert into info(name,pw,time) values('$name','".md5($pw)."','".time()."')";
    $result2 = mysqli_query($conn,$sql2);
}
echo "<script type='text/javascript'>history.go(-1)</script>";


