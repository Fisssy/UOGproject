
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
 $id = $_POST["id"];

  $sql = "DELETE FROM user WHERE id='".$id."'";
$result = mysqli_query($connect,$query);
$myrow = mysqli_fetch_array($result,MYSQLI_ASSOC);

$id=$myrow['id'];



if (!$myrow){
 print "<p>No such record</p>";
}
else {

 mysqli_query($connect,$sql);
 print "It has been deleted from the Database";
 print "</p>Please click <a href=viewuser.php>HERE</a> to continue to the website</p>";
}
mysqli_close($connect);
?>