<?php

include_once "conn.php";
header("Content-Type: text/html;charset=utf-8");

$sql = "select * from insurance ";

$result = mysqli_query($conn,$sql);
$dataCount = mysqli_num_rows($result);//返回指定数据库表中数据的行数

$data="";
$array= array();
class User{
    public $name;
    public $heat;
    public $age;
}

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
    $user=new User();
    $user->name = $row['name'];
    $user->heat = $row['heat'];
    $user->age = $row['age'];//字段添加处2
    $array[]=$user;
}
$data=json_encode($array,JSON_UNESCAPED_UNICODE);
// echo "{".'"user"'.":".$data."}";
echo $data;
?>