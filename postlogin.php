
<?php
session_start();
$username = trim($_POST['username']);
$pw = trim($_POST['pw2']);

if(!strlen($username) || !strlen($pw)){
    echo "<script>alert('用户名和密码不能为空');history.back();</script>";
    exit;
}
else{
    if(!preg_match('/^[a-zA-Z0-9]{2,10}$/',$username)){
        echo "<script>alert('用户名必填，且只能由大小写字符和数字组成，长度为2-10个字符');history.back();</script>";
        exit;
    }
    if(!preg_match('/^[a-zA-Z0-9_*]{6,20}$/',$pw)){
        echo "<script>alert('密码为大小写和数字，以及*_，长度为6-20位')</script>";
        echo "<script type='text/javascript'>history.go(-1)</script>";
        exit;
    }
}

include_once "conn.php";

$sql = "select * from info where name = '$username' and pw = '" . md5($pw) . "'";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
if($num){
    $_SESSION['uid']=$username;
    echo "<script>location.href='personal.php';</script>";
//    $_SESSION['loggedUsername'] = $username;
}
else{
    echo "<script>alert('登录失败！');</script>";
    echo "<script type='text/javascript'>history.go(-1)</script>";
}

