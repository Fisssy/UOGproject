<?php
        require_once('./doa.php');
        $connect = connectDB();
        $username = $_COOKIE['username'];

        $user = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM `user` WHERE `name` = '" . $username . "'"));

        $query = "SELECT * FROM `detail` WHERE `id` = ". $_POST['id'];

$result = mysqli_query($connect,$query);
$myrow = mysqli_fetch_array($result,MYSQLI_ASSOC);
$id=$myrow['id'];
$name=$myrow['name'];
$pickuplocation=$myrow['pickuplocation'];
$date=$myrow['date'];
$time=$myrow['time'];
$car=$myrow['car'];



if(!$myrow){
 print "<p>No such record</p>";
}
else {
 print "<form name='editform' action ='editdetail2.php' method='post'>
 <table align=center>
 <tr><td>ID</td>

</tr>
<input type='hidden' name='id' value='$id'>
 <tr><td>Name</td><td><input type='text' name='name' value='$name'></td></tr>
 <tr><td>pickuplocation</td><td><input type='text' name='pickuplocation' value='$pickuplocation'></td></tr>

 <tr><td>date</td><td><input type='text' name='date' value='$date'></td></tr>
 <tr><td>time</td><td><input type='text' name='time' value='$time'></td></tr>
 <tr><td>car</td><td><input type='text' name='car' value='$car'></td></tr>
 <tr><td><input type='submit' value='submit' />
 <input type='reset' value='Reset'/></td>
 </tr>
 </table>
 </form>";
}
mysqli_close($connect);
?>