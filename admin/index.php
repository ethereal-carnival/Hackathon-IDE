<?php session_start(); ?>
<html>

<head>
    <title>Administrator - uCode</title>

    <?php include '../assets/parts/includes.php'; ?>
</head>

<body>
    <?php include '../assets/parts/header.php'; ?>

    <div class="form_wrapper">
        <center>
            <div class="form_box">
                <form action="add_question.php" method="post">
                    <textarea id="new_question" name="question" placeholder="Please enter the new question here...."></textarea><br />
                    <input type="submit" name="submit" value="submit" id="submit_question" />
                </form>
            </div>
        </center>
    </div>
</body>

</html>
