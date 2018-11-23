<?php
        require_once('./doa.php');
        $connect = connectDB();
        $username = $_COOKIE['username'];

        $user = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM `user` WHERE `name` = '" . $username . "'"));

        $query = "SELECT * FROM `user` WHERE `id` = ". $_POST['id'];


$result = mysqli_query($connect,$query);
$myrow = mysqli_fetch_array($result,MYSQLI_ASSOC);

$id=$myrow['id'];
$is_admin=$myrow['is_admin'];
$name=$myrow['name'];
$password=$myrow['password'];
$email=$myrow['email'];
$phonenumber=$myrow['phonenumber'];



if(!$myrow){
 print "<p>No such record</p>";
}
else {
 print "<form name='editform' action ='edituser2.php' method='post'>
 <table align=center>
 <tr><td>ID</td>

</tr>
<input type='hidden' name='id' value='$id'>
 <tr><td>is_admin</td><td><input type='' name='is_admin' value='$is_admin'></td></tr>
 <tr><td>Name</td><td><input type='text' name='name' value='$name'></td></tr>
 <tr><td>Email</td><td><input type='text' name='email' value='$email'></td></tr>
 <tr><td>Password</td><td><input type='text' name='password' value='$password'></td></tr>
  <tr><td>phonenumber</td><td><input type='text' name='phonenumber' value='$password'></td></tr>
 <tr><td><input type='submit' value='submit' />
 <input type='reset' value='Reset'/></td>
 </tr>
 </table>
 </form>";
}
mysqli_close($connect);
?>