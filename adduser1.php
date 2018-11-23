<?php
        require_once('./doa.php');
        $connect = connectDB();
        $username = $_COOKIE['username'];

        $user = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM `user` WHERE `name` = '" . $username . "'"));

        if ($user['is_admin']) {
            $query = "SELECT * FROM `user`";
        } else {
            $query = "SELECT * FROM `user` WHERE `name` = '" . $username . "'";
        }
$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];

$sql="INSERT INTO user(name, is_admin,password,email,phonenumber)
VALUES
('$_POST[name]',0,'$_POST[password]','$_POST[email]',
'$_POST[phonenumber]')";

if (!mysqli_query($connect,$sql))
 {
 die('Error: ' . mysqli_error($connect));
 }
echo "1 record added";
echo "</p>Please click <a href=viewuser.php>HERE</a> to continue to the website</p>";
mysqli_close($connect);
        ?>