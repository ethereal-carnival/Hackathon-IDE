<?php
    session_start();
    if(!(isset($_SESSION['username']))) header('location: /login');
?>
<html>

<head>
    <title>Leaderboard - uCode</title>
    <?php include '../assets/parts/includes.php' ?>
</head>

<body>
    <?php include '../assets/parts/header.php'; ?>

    <table>
        <th>S.No.</th>
        <th>Username</th>
        <th>Rank</th>

        <tr>1.</tr>
        <tr></tr>
        <tr></tr>

    </table>
</body>

</html>
