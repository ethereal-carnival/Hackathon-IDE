<header id="header">
    <a href="/" id="brand"><strong>U-Code</strong></a>
    <div class="right">
        <ul>
            <?php if(isset($_SESSION['username'])) echo "
            <li><a href='/code' class='nav'>Code</a></li>
            <li><a href='/leaderboard' class='nav'>Leaderboard</a></li>
            <li><a href='/logout' class='nav last'>Logout</a></li>";
            else echo "
            <li><a href='/login' class='nav'>Log in</a></li>
            <li><a href='/register' class='nav last'>Register</a></li>";
            ?>
        </ul>
    </div>
</header>
