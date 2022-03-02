<?php
header("Content-Type:text/html;charset=utf-8");

$name = trim($_POST['name']);
$phone = trim($_POST['phone']);
$idc = trim($_POST['idc']);
$address = trim($_POST['address']);
session_start();
if(empty($_SESSION['uid'])){
//没有登陆的话.....
    echo "<script>alert('请先登录哦');location.href='222.php';</script>";
}else{
    $user=$_SESSION['uid'];
}
$pdn=trim($_POST['pdn']);
$year=number_format($_POST['year2']);
$price=$_SESSION['price']*$year;

$flag = trim($_POST['flag']);
if ($flag==1)
{
    include_once "conn.php";


    $sql = "insert into Orders(name,phone,idc,address,time,username,price,year,pdn) values('$name','$phone','$idc','$address','".date('Y-m-d H:i:s')."','$user',$price,$year,'$pdn')";

    $result = mysqli_query($conn,$sql);
    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
    $sql2 = "UPDATE info SET tname='$name', phone='$phone',idc='$idc',address='$address' WHERE name='$user'";
    $result2 = mysqli_query($conn, $sql2);

    $sql3 = "UPDATE insurance set heat=heat+10 where name = '$pdn'";
    $result3 = mysqli_query($conn,$sql3);

    echo "<script type='text/javascript'>alert('订单已提交');history.go(-1)</script>";

}
else
    echo "<script type='text/javascript'>history.go(-1)</script>";





