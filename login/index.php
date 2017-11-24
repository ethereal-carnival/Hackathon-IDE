<?php session_start();
    if(isset($_SESSION['username'])) {
        header('location: /code');
        die();
    }
?>

<html>

<head>
    <title>Login - Hackathon_IDE</title>
    <?php include '../assets/parts/includes.php' ?>
</head>

<body>
    <?php include '../assets/parts/header.php'; ?>
    <div id="login_wrapper">
        <center>
            <section id="login_box">
                <form action="/assets/functions/login_verify.php" method="post">
                    <article>
                        <input class="inp-txt" type="text" placeholder="Username" name="username" />
                    </article>
                    <article>
                        <input class="inp-txt" type="password" placeholder="Password" name="password" />
                    </article>
                    <article>
                        <input type="submit" name="Submit" value="Log in" class="btn-submit"/>
                    </article>
                </form>
            </section>
        </center>
    </div>
</body>

</html>
