<?php

require("doa.php");

$connect = connectDB();

$name=$_POST['name'];
    $pickuplocation=$_POST['pickuplocation'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $car=$_POST['car'];

if(isset($_POST['name']))
{ 
    if (validate_input()) {
        $sql = "INSERT INTO detail(pickuplocation, date, time, car, name) 
            VALUES ('$pickuplocation','$date','$time', '$car', '$name')";

        if (!mysqli_query($connect,$sql)) {
            die('Error: ' . mysqli_error($connect));
        }
        
        mysqli_close($connect);

        if($sql) {
            echo "<script> alert('Your order has been complete!');parent.location.href='index.html'; </script>";
        } else {
            echo "<script> alert('Failed to order,Please try again');parent.location.href='index.html';</script>";
        } 
    }

}

function validate_input() {
	

	if (strlen($_POST['name']) < 3) {
		echo "<script>alert(Name must be minimum 3 characters.');window.history.go(-1);</script>";
		return false;
	}
    if (strlen($_POST['pickuplocation']) < 3) {

        echo "<script>alert('Location nust be minimum 3 characters.');window.history.go(-1);</script>";
        return false;
    }
     if (strlen($_POST['car']) < 3) {
        echo "<script>alert('Type the car you want to take.');window.history.go(-1);</script>";
        return false;
    }


   if(!isset($_POST['date']) || trim($_POST['date']) == '')
{
   echo "You did not fill out the required fields.";
}
   if(!isset($_POST['time']) || trim($_POST['time']) == '')
{
   echo "You did not fill out the required fields.";
}


	return true;
   }

?>
