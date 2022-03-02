<?php
header("Content-Type:text/html;charset=utf-8");

$type = trim($_POST['F1_dropdown']);
$shout = trim($_POST['F2_radio']);
$xian = trim($_POST['F3']);
$way = trim($_POST['F4_radio']);
$name = trim($_POST['F9']);
$phone = trim($_POST['F10']);
$idc = trim($_POST['F11']);
$address = trim($_POST['F12']);
$did=trim($_POST['Fyyy']);

session_start();
if(empty($_SESSION['uid'])){
//没有登陆的话.....
    echo "<script>alert('请先登录哦');location.href='222.php';</script>";
}else{
    $user=$_SESSION['uid'];
}

include_once "conn.php";

if($type=='')
{
    echo "<script type='text/javascript'>alert('类型不能为空!');history.go(-1)</script>";
}
else if(strlen($idc)!=18)
{
    echo "<script type='text/javascript'>history.go(-1)</script>";
}
else if(strlen($phone)!=11)
{
    echo "<script type='text/javascript'>history.go(-1)</script>";
}
else if($did)
{
    $sql = "select * from orders where username ='$user'and id='$did'";
    $result = mysqli_query($conn,$sql);
    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
    $num = mysqli_num_rows($result);

    if ($num) {
        $sql = "insert into shou(type,shout,xian,way,name,phone,idc,address,username,did) values('$type','$shout','$xian','$way','$name','$phone','$idc','$address','$user','$did')";

        $result = mysqli_query($conn,$sql);
        if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
        echo "<script type='text/javascript'>alert('提交成功，请耐心等待回复哦!');history.go(-1)</script>";
    }
    else
    {
        //echo "<script type='text/javascript'>alert('没有此订单');history.go(-1)</script>";
    }
}









