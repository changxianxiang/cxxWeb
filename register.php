<?php
if($_GET["back"]=="退出登陆"){
    setcookie("$name", "$name", time()-3600);
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>register常宪祥</title>
    <style type="text/css">
        body{
            background: beige;
        }
        input{
            border: black 0px;
        }
    </style>
</head>
<body>
    <h2>欢迎注册/登陆</h2>
        <img src="images/logo_black.png">
<form action="backstage.php" method="get" class="excel" >
用户名：<input class="in" type="text" name="userName" autofocus><br>
邮箱：<input class="in" type="text"name="userEmail"> <br>
请选择您的身份： <input list="identical" name="userIdentify">
    <datalist id="identical">
        <option value="学生">
        <option value="老师">
    </datalist><br>
请选择您的学校：<select name="userSchool">
        <option>烟台大学</option>
        <option>清华大学</option>
        <option>北京大学</option>
    </select><br>
请输入密码：<input class="in" type="password" name="mainuserPassword"><br>
请再次输入：<input class="in" type="password" name="subuserPassword"><br>
    <input value="提交" type="image" src="images/logo_black.png" height="40" width="48" alt="Submit">
</form>
</body>
</html>