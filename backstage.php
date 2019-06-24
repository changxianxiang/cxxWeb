<?php
$conn=new mysqli("localhost","root","root","register");//创建数据库连接
if($conn->connect_error){
    echo "连接失败".$conn->connect_error;
}else{
   // echo "连接成功";
}
$sql="create database if not exists register";//创建一个数据库register
if($conn->query($sql)==true){
  //  echo "create databas successf";
}
//创建数据表
$sql="create table  information (
id int NOT NULL AUTO_INCREMENT primary key ,
userName varchar(20) not null,
userEmail varchar(20) not null,
userIdentical varchar(20) not null,
userSchool varchar(20) not null,
userPassword varchar(20) not null
)";
if($conn->query($sql)==true){
    echo "create table successful";
}
if($_GET["mainuserPassword"]!=$_GET["subuserPassword"]){
    die("请您确认密码");
}
//插入数据
$name=empty($_GET["userName"])?die("请输入您的用户名"):$_GET["userName"];
$email=empty($_GET["userEmail"])?die("请输入您要绑定的邮箱"):$_GET["userEmail"];
$identify=empty($_GET["userIdentify"])?die("请您进行身份认证"):$_GET["userIdentify"];
$school=empty($_GET["userSchool"])?die("选择您的学校"):$_GET["userSchool"];
$passowrd=empty($_GET["mainuserPassword"])?die("输入您的登陆密码"):$_GET["mainuserPassword"];
$sql="insert into information(userName,userEmail,userIdentical,userSchool,userPassword)
values ('$name','$email','$identify','$identify','$identify')";
if($conn->query($sql)==true){
    //echo "adfadsfdafsdafadsd";
}else{
    echo "faile".$conn->error;
}


//echo $_GET["userName"];
?>
