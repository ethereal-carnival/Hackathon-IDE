<?php session_start();
    if(isset($_SESSION['username'])) header('location: /code');
    else header('location: /login');
?>
<html>

<head>
    <title>Home - uCode</title>

    <?php include 'assets/parts/includes.php'; ?>
</head>


<body>
    <?php include 'assets/parts/header.php'; ?>
</body>

</html>
