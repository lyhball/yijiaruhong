<?php
session_start();


if(empty($_SESSION['uid'])){
//没有登陆的话.....
    echo "<script>alert('请先登录哦');location.href='222.php';</script>";
}else{
    $name = $_SESSION['uid'];
}

include_once "conn.php";
$pdname = $_GET['ac'];

$sql = "SELECT * FROM insurance where name = '$pdname'";

//$sql = "insert into insurance (name,price,situ,type) values('$name','$price','$situ','$type')";

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);//转成数组，且返回第一条数据,当不是一个对象时候退出
if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
$pdid=$row['id'];

$sta = $_GET['st'];

if($sta=="收藏"){
    $sql3 = "insert into wish(pdid,pdname,name,state) values('$pdid','$pdname','$name','收藏')";
    $result3 = mysqli_query($conn,$sql3);
    $sql9 = "UPDATE insurance set heat=heat+2 where name = '$pdname'";
    $result9 = mysqli_query($conn,$sql9);
//    echo "<script type='text/javascript'>alert('收藏成功');history.go(-1)</script>";
}
else{
    $sql3 = "delete from wish where name = '$name' and pdname = '$pdname' ";
    $result3 = mysqli_query($conn,$sql3);
    $sql9 = "UPDATE insurance set heat=heat-2 where name = '$pdname'";
    $result9 = mysqli_query($conn,$sql9);
//    echo "<script type='text/javascript'>alert('取消收藏成功');history.go(-1)</script>";
}
echo "<script type='text/javascript'>history.go(-1)</script>";


?>





