<?php

require("doa.php");

$connect = connectDB();
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

function validate_input()
{
    if (strlen($_POST['name']) < 3) {
        echo "<script>alert('Name must be minimum 3 characters.');window.history.go(-1);</script>";
        return false;
    }

     $re = '/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/i';
    if (!preg_match($re, $_POST['email'])) {
        return false;
    }

    if (!isset($_POST['comment']) || !$_POST['comment']) {
        return false;
    }
    return true;


}

if (isset($_POST['name'])) {

    if (validate_input()) {
        $sql = "INSERT INTO message(name, email, comment) VALUES ('$name', '$email', '$comment')";

        if (!mysqli_query($connect, $sql)) {
            die('Error: ' . mysqli_error($connect));
        }

        mysqli_close($connect);

        if ($sql) {
            echo "<script> alert('Your message has been sent successfully!');parent.location.href='contacts.html'; </script>";
        } else {
            echo "<script> alert('Failed to send');parent.location.href='contacts.html';</script>";
        }
    }

}
