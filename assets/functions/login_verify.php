<?php
    session_start();
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $con = mysqli_connect('localhost','root','','ucode');
    $select_query = "select pass, email from users where username='$username';";

    $result = mysqli_query($con, $select_query) or die(mysqli_error($con));
    $row = mysqli_fetch_array($result);

    if($password == $row[0]) {
        if(strpos($row[1],"@ddn.upes.ac.in")) $_SESSION['admin']="true";
        $_SESSION['username'] = $username;
        header('location: /');
    }
    else {
        echo "
            <html><head><script type='text/css'>
            alert('The username and password combination does not exist.');
            window.location.href('/');
            </script></head></html>
        ";
    }
?>
