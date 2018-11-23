<?php

require("doa.php");

$connect = connectDB();

$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];


if (isset($_POST['name'])) {
    if (validate_input()) {
        $sql = "INSERT INTO user (name, is_admin, password, email, phonenumber) VALUES ('$name', 0, '$password', '$email', '$phonenumber')";

        if (!mysqli_query($connect, $sql)) {
            die('Error: ' . mysqli_error($connect));
        }

        mysqli_close($connect);

        if ($sql) {
            echo "<script> alert('Registration successful');parent.location.href='login.php'; </script>";
        } else {
            echo "<script> alert('Failed to register');parent.location.href='register.php';</script>";
        }
    }

}

function validate_input()
{
    if (strlen($_POST['name']) < 3) {
        echo "<script>alert('Name must be minimum 3 characters.');window.history.go(-1);</script>";
        return false;
    }

    if (strlen($_POST['password']) < 4) {

        echo "<script>alert('Password nust be minimum 4 characters.');window.history.go(-1);</script>";
        return false;
    }


    $email = "john.codex@example.com";
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "$email is a valid email address";
    } else {
        echo "$email is not a valid email address";
        return false;
    }


    return true;
}

?>
