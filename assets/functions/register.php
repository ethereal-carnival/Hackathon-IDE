<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mname = $_POST['mname'];
    $sap = $_POST['sap'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $email = $_POST['email'];
    $number = $_POST['number'];
    $branch = $_POST['branch'];
    $year = $_POST['year'];

    $con = mysqli_connect('localhost','root','');
    mysqli_query($con, "CREATE DATABASE IF NOT EXISTS ucode;");
    mysqli_select_db($con,'ucode');
    mysqli_query($con, "CREATE TABLE IF NOT EXISTS users ( fname TEXT NOT NULL , lname TEXT NOT NULL , mname TEXT, sap INT NOT NULL , username TEXT NOT NULL , pass TEXT NOT NULL , email TEXT NOT NULL , phone BIGINT NOT NULL , branch TEXT , yr TEXT, PRIMARY KEY (username(40)));");

    $query = "insert into users VALUES ( '$fname', '$lname', '$mname', $sap, '$username', '$password', '$email', $number, '$branch', '$year');";
    mysqli_query($con, $query);

    header('location: /');
?>
