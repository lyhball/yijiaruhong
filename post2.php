<?php
header("Content-Type:text/html;charset=utf-8");

session_start();
$cpw = trim($_POST['cpw']);
$cnpw = trim($_POST['cnpw']);
$ccnpw = trim($_POST['ccnpw']);
$username=$_SESSION['uid'];

include_once "conn.php";

$sql = "select * from info where name = '$username' and pw = '" . md5($cpw) . "'";

$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
if($num){
    if(!preg_match('/^[a-zA-Z0-9_*]{6,20}$/',$cnpw)) {
        echo "<script>alert('密码为大小写和数字，以及*_，长度为6-20位')</script>";
    }
    else if($cnpw!=$ccnpw)
    {
        echo "<script>alert('密码不一致！')</script>";
    }
    else
    {
        $sql2 = "UPDATE  info set pw ='".md5($cnpw)."' where name = '$username'";
        $result2 = mysqli_query($conn,$sql2);
        if (!$result2) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
        else
            echo "<script>alert('修改完成！');</script>";
    }
}
else{
    echo "<script>alert('密码错误！');</script>";
}
echo "<script type='text/javascript'>history.go(-1)</script>";




