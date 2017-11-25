<?php
    session_start();
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $con = mysqli_connect('localhost','root','','ucode');
    $select_query = "select pass from users where username='$username';";

    $result = mysqli_query($con, $select_query) or die(mysqli_error($con));
    $row = mysqli_fetch_array($result);

    if($password == $row[0]) {
        $_SESSION['username'] = $username;
        header('location: /');
    }
?>
