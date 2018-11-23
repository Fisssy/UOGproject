<?php
        require_once('./doa.php');
        $connect = connectDB();
        $username = $_COOKIE['username'];

        $user = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM `user` WHERE `name` = '" . $username . "'"));

        if ($user['is_admin']) {
            $query = "SELECT * FROM `detail`";
        } else {
            $query = "SELECT * FROM `detail` WHERE `name` = '" . $username . "'";
        }
$name = $_POST['name'];
$pickuplocation = $_POST['pickuplocation'];
$date = $_POST['date'];
$time = $_POST['time'];
$car = $_POST['car'];

$sql="INSERT INTO detail(name, pickuplocation, date, time, car)
VALUES
('$_POST[name]','$_POST[pickuplocation]','$_POST[date]',
'$_POST[time]','$_POST[car]')";

if (!mysqli_query($connect,$sql))
 {
 die('Error: ' . mysqli_error($connect));
 }
echo "1 record added";
echo "</p>Please click <a href=viewuser.php>HERE</a> to continue to the website</p>";
mysqli_close($connect);
        ?>