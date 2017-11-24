<html>

<head>
    <title>Code Editor - idE</title>

    <?php include '../assets/parts/includes.php'; ?>
</head>

<body>
    <?php include '../assets/parts/header.php'; ?>
    <section id="api">
        <form action="#" method="post">
            <article id="code_wrapper">
                <header id="header_code">
                    Choose your language
                    <select name="language">
                    <option value="c">C</option>
                    <option value="clojure">Clojure</option>
                    <option value="cpp">C++ 11</option>
                    <option value="cs">C#</option>
                    <option value="java">Java</option>
                    <option value="js">Javascript</option>
                    <option value="pascal">Pascal</option>
                    <option value="perl">Perl</option>
                    <option value="php">PHP</option>
                    <option value="python">Python</option>
                    <option value="ruby">Ruby</option>
                </select>
                </header>
                <textarea id="code" class="input" placeholder="Enter code here" name="source_code"></textarea>
                <footer id="footer_code">
                    <button id="run_button" name="submit">RUN <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></button>
                </footer>
            </article>

            <article id="io_wrapper">
                <textarea class="input" id="input_data" placeholder="Provide custom input here"></textarea>
                <p class="input" id="output_data"></p>
            </article>
        </form>
    </section>
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
