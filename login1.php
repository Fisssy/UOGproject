<?php
session_start();
require("doa.php");

$connect = connectDB();

$name= $_POST["name"];
$password= $_POST["password"];

$query = "SELECT * FROM user WHERE name='".$name."' And password='".$password."'";

$result = mysqli_query($connect,$query);
$myrow = mysqli_fetch_array($result,MYSQLI_ASSOC);

if(!$myrow){
  echo  "<p class='sty1'>wrong name or password</p>";
  echo "<p class='sty1'>Click <a href=login.php>HERE</a> to continue to the website</p>";
}
else{
	$cookie_name = "username";
	$cookie_value = $myrow['name'];
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
	header("Location:index.html");
}

mysqli_close($connect);
?>
