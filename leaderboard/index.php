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

        <div id="table_wrapper">
            <center>
                <div id="table_box">
                    <table id="table">
                        <tbody>
                            <tr id="heading_row">
                                <th>Username</th>
                                <th>Rank</th>
                                <th>Score</th>
                            </tr>

                            <?php
                            $con = mysqli_connect('localhost','root','','ucode');
                            $select_query = "select username, rank, score from leaderboard;";

                            $result = mysqli_query($con, $select_query) or die(mysqli_error($con));
                            while(($row = mysqli_fetch_array($result))!=null) echo "
                                <tr>
                                    <td>$row[0]</td>
                                    <td>$row[1]</td>
                                    <td>$row[2]</td>
                                </tr>";
                            ?>
                        </tbody>
                    </table>
                </div>
            </center>
        </div>
    </body>

    </html>
