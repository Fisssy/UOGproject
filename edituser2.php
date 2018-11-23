<?php

require_once('./doa.php');
$connect = connectDB();
$username = $_COOKIE['username'];

$user = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM `user` WHERE `name` = '" . $username . "'"));

$query = "SELECT * FROM `user` WHERE `id` = " . $_POST['id'];

$result = mysqli_query($connect, $query);
$myrow = mysqli_fetch_array($result, MYSQLI_ASSOC);
$is_admin = $_POST['is_admin'];
$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$sql = "UPDATE `user` SET `name` = '$name', `is_admin` = $is_admin, `password` = '$password', `email` = '$email', `phonenumber`='$phonenumber' WHERE `id` = " . $_POST['id'];

if (!mysqli_query($connect, $sql)) {
    die('Error: ' . mysqli_error($connect));
}
print "<p>Your information has been updated in the database</p>";
print "</p>Please click <a href=viewuser.php>HERE</a> to continue to the website</p>";
mysqli_close($connect);
?>
</body>
</html>
