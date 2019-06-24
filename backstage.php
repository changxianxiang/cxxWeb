<?php
$conn=new mysqli("localhost","root","root","register");
if($conn->connect_error){
    echo "连接失败".$conn->connect_error;
}else{
   // echo "连接成功";
}
$sql="create database if not exists register";
if($conn->query($sql)==true){
  //  echo "create databas successf";
}
$sql="create table  information (
id int NOT NULL AUTO_INCREMENT primary key ,
userName char not null,
userEmail char not null,
userIdentical char not null,
userSchool char not null,
userPassword char not null
)";
if($conn->query($sql)==true){
    echo "create table successful";
}
$name=$_GET["userName"];
echo $_GET["userName"];
$email=$_GET["userEmail"];
$identify=$_GET["userIdentify"];
$school=$_GET["userSchool"];
$passowrd=$_GET["mainuserPassword"];
$sql="insert into information(userName,userEmail,userIdentical,userSchool,userPassword)
values ('$name','$email','$identify','$identify','$identify')";
if($conn->query($sql)==true){
    echo "adfadsfdafsdafadsd";
}else{
    echo "faile".$conn->error;
}


//echo $_GET["userName"];
?>
