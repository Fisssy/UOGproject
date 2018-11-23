<?php

require_once('./doa.php');
$connect = connectDB();
$username = $_COOKIE['username'];

$user = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM `user` WHERE `name` = '" . $username . "'"));

$query = "SELECT * FROM `message` WHERE `id` = '" . $_POST['id'] . "'";

$result = mysqli_query($connect, $query);
$myrow = mysqli_fetch_array($result, MYSQLI_ASSOC);
$name = $myrow['name'];
$email = $myrow['email'];
$comment = $_POST['comment'];
$sql = "UPDATE `message` SET `name`='$name',`email`='$email' , `comment`='$comment' WHERE `id` = '" . $_POST['id'] . "'";
var_dump($sql);

if (!mysqli_query($connect, $sql)) {
    die('Error: ' . mysqli_error($connect));
}
print "<p>Your information has been updated in the database</p>";
print "</p>Please click <a href=viewcomment.php>HERE</a> to continue to the website</p>";
mysqli_close($connect);
?>
</body>
</html>

