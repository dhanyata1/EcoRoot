<?php

require('connection.php');

// For Login
if(isset($_POST['login'])) {
    $email_username = mysqli_real_escape_string($con, $_POST['email_username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query = "SELECT * FROM `registered_users` WHERE `email`='$email_username' OR `username`='$email_username'";
    $result = mysqli_query($con, $query);

    if($result) {
        if(mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);
            if(password_verify($password, $user['password'])) {
                // Password is correct, proceed with login
                // Your login logic here
                echo "<script>alert('Login successful'); window.location.href='index.php';</script>";
            } else {
                // Password is incorrect
                echo "<script>alert('Incorrect password'); window.location.href='index.php';</script>";
            }
        } else {
            // Email or username not registered
            echo "<script>alert('Email or username not registered'); window.location.href='index.php';</script>";
        }
    } else {
        // Query execution error
        echo "<script>alert('Cannot run query'); window.location.href='index.php';</script>";
    }
}

// For Registration
if(isset($_POST['register'])) {
    $full_name = mysqli_real_escape_string($con, $_POST['full_name']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    $user_exist_query = "SELECT * FROM `registered_users` WHERE `username`='$username' OR `email`='$email'";
    $result = mysqli_query($con, $user_exist_query);

    if($result) {
        if(mysqli_num_rows($result) > 0) {
            $result_fetch = mysqli_fetch_assoc($result);
            if($result_fetch['username'] == $username) {
                echo "<script>alert('" . $result_fetch['username'] . " - Username already taken'); window.location.href='index.php';</script>";
            } else {
                echo "<script>alert('" . $result_fetch['email'] . " - Email already registered'); window.location.href='index.php';</script>";
            }
        } else {
            $query = "INSERT INTO `registered_users`(`full_name`, `username`, `email`, `password`) VALUES ('$full_name','$username','$email','$hashed_password')";
            if(mysqli_query($con, $query)) {
                echo "<script>alert('Registration Successful'); window.location.href='index.php';</script>";
            } else {
                echo "<script>alert('Registration Failed'); window.location.href='index.php';</script>";
            }
        }
    } else {
        echo "<script>alert('Cannot run query'); window.location.href='index.php';</script>";
    }
}

?>
