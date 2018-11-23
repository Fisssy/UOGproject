<?php
require_once('./doa.php');
$connect = connectDB();
$username = $_COOKIE['username'];

$user = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM `user` WHERE `name` = '" . $username . "'"));

if ($user['is_admin']) {
    $query = "SELECT * FROM `message` WHERE `id` = " . $_POST['id'];
} else {
    $query = "SELECT * FROM `message` WHERE `name` = '" . $username . "' AND `id` = " . $_POST['id'];
}

$result = mysqli_query($connect, $query);
$myrow = mysqli_fetch_array($result, MYSQLI_ASSOC);

$name = $myrow['name'];
$email = $myrow['email'];
$comment = $myrow['comment'];

if (!$myrow) {
    print "<p>No such record</p>";
} else {
    $sql = "DELETE FROM `message` WHERE `id` =" . $_POST['id'];
    mysqli_query($connect, $sql);
    print "It has been deleted from the Database";
    print "</p>Please click <a href=viewcomment.php>HERE</a> to continue to the website</p>";
}
mysqli_close($connect);
?>