<?php session_start();
    if(isset($_SESSION['username'])) header('location: /code');
?>
<html>

<head>
    <title>Home - Hackathon_IDE</title>

    <?php include 'assets/parts/includes.php'; ?>
</head>


<body>
    <?php include 'assets/parts/header.php'; ?>
</body>

</html>
