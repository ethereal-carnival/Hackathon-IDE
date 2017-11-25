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
                    $select_query = "select description from question;";

                    $result = mysqli_query($con, $select_query) or die(mysqli_error($con));
                    $row = mysqli_fetch_array($result);
                    echo "$row[0]";
                ?>
            </div>

            <article id="code_wrapper">
                <header id="header_code">
                    Choose your language
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
                </footer>
            </article>

            <article id="io_wrapper">
                <textarea class="input" id="input_data" placeholder="Provide custom input here" name="InputData"></textarea>
                <p class="input" id="output_data"></p>
            </article>
        </section>

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
