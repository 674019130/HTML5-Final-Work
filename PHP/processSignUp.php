<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/5
 * Time: 15:05
 */


$username = $_POST["username"];
$password1 = $_POST["password1"];
$password2 = $_POST["password2"];

$servername = "localhost";
$user = "root";
$password = "lp090911";
$data = "test";

$con = new mysqli($servername,$user,$password,$data);
if($con->connect_error){
    die("连接失败".$con->connect_error);
}
echo "连接成功"."<br/>";
$sql = "insert into user(user,password1,password2) values ('$username','$password1','$password2')";
if($con->query($sql)===true){
    echo "data insert success";
}else {
    echo "data insert fail"."<br/>".$con->error;
}
$con->close();

header("Location: ../HTML01/login and signup.html");   //跳转到相应的页面，而且此代码之后的代码不执行

?>

