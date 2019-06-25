<?php
setcookie("", "Alex Porter", time()+3600);
?>

<html>
<body>

</body>
</html>
<?php
// Print a cookie
echo $_COOKIE["user"];

// A way to view all cookies
//print_r($_COOKIE);
?>
