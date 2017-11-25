<?php
    session_start();
    if(!(isset($_SESSION['username']))) header('location: /login');
?>
    <html>

    <head>
        <title>Code Editor - uCode</title>

        <?php include '../assets/parts/includes.php'; ?>
    </head>

    <body>
        <?php include '../assets/parts/header.php'; ?>
        <section id="api">

            <div id="ques">
                <?php
                    $con = mysqli_connect('localhost','root','','ucode');
                    $select_query = "select description, U_id from question;";

                    $result = mysqli_query($con, $select_query) or die(mysqli_error($con));
                    $row = mysqli_fetch_array($result);
                    echo "$row[0]";
                    echo "<p id='hidden' style='display: none'>$row[1]</p>"
                ?>
            </div>

            <article id="code_wrapper">
                <header id="header_code">
                    Choose your language:
                    <select name="language" id="choice">
                    <option value="c">C</option>
                    <option value="clojure">Clojure</option>
                    <option value="cpp">C++</option>
                    <option value="cpp11">C++ 11</option>
                    <option value="csharp">C#</option>
                    <option value="java">Java</option>
                    <option value="javascript">Javascript</option>
                    <option value="haskell">Haskell</option>
                    <option value="perl">Perl</option>
                    <option value="php">PHP</option>
                    <option value="python">Python</option>
                    <option value="ruby">Ruby</option>
                </select>
                </header>
                <textarea id="code" class="input" placeholder="Enter code here" name="source_code"></textarea>
                <footer id="footer_code">
                    <button id="run_button" name="submit" onclick="execute();">RUN <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></button>
                    <button id="save_button" name="submit" onclick="save();">SAVE &nbsp;<i class="fa fa-floppy-o" aria-hidden="true"></i></button>
                </footer>
            </article>

            <article id="io_wrapper">
                <textarea class="input" id="input_data" placeholder="Provide custom input here" name="InputData"></textarea>
                <p class="input" id="output_data"></p>
            </article>
        </section>

        <aside id="side_leaderboard">
            <div id="table_box_code">
                <center>
                    <h1 id="top">TOP 10</h1>
                </center>
                <table id="table_code">
                    <tbody>
                        <tr id="heading_row_code">
                            <th>Username</th>
                            <th>Rank</th>
                            <th>Score</th>
                        </tr>

                        <?php
                            $con = mysqli_connect('localhost','root','','ucode');
                            $select_query = "select username, rank, score from leaderboard;";

                            $result = mysqli_query($con, $select_query) or die(mysqli_error($con));
                            $i=0;
                            while(($row = mysqli_fetch_array($result))!=null && $i++<10) echo "
                                <tr>
                                    <td>$row[0]</td>
                                    <td>$row[1]</td>
                                    <td>$row[2]</td>
                                </tr>";
                            ?>
                    </tbody>
                </table>
            </div>
        </aside>

        <?php include '../assets/parts/footer.php'; ?>

        <script type="text/javascript">
            document.getElementById("choice").value = "c";

        </script>
    </body>

    </html>

    <!--
C
C++11
Clojure
C#
Java
Javascript
Pascal
Perl
PHP
Python
Ruby
-->
