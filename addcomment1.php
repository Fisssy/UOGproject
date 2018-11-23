<?php
        require_once('./doa.php');
        $connect = connectDB();
        $username = $_COOKIE['username'];

        $user = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM `user` WHERE `name` = '" . $username . "'"));

        if ($user['is_admin']) {
            $query = "SELECT * FROM `message`";
        } else {
            $query = "SELECT * FROM `message` WHERE `name` = '" . $username . "'";
        }
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$sql="INSERT INTO message(name, email, comment)
VALUES
('$_POST[name]','$_POST[email]',
'$_POST[comment]')";

if (!mysqli_query($connect,$sql))
 {
 die('Error: ' . mysqli_error($connect));
 }
echo "1 record added";
echo "</p>Please click <a href=viewcomment.php>HERE</a> to continue to the website</p>";
mysqli_close($connect);
        ?>