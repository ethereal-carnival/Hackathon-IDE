<html>
    <head>
        <title>Register - uCode</title>

        <?php include '../assets/parts/includes.php'; ?>
    </head>
    <body>
        <?php include '../assets/parts/header.php'; ?>
        <div id="register_wrapper">
        <center>
            <section id="register_box">
                <form action="/assets/functions/register.php" method="post">
                    <article class="inp-group">
                        <input class="inp-txt inp-reg" type="text" placeholder="First Name" name="fname" />
                        <input class="inp-txt inp-reg" type="text" placeholder="Last Name" name="lname" />
                    </article>
                    <article class="inp-group">
                        <input class="inp-txt inp-reg" type="text" placeholder="Middle Name" name="mname" />
                        <input class="inp-txt inp-reg" type="text" placeholder="SAP ID" name="sap" />
                    </article>
                    <article class="inp-group">
                        <input class="inp-txt inp-reg" type="text" placeholder="Username" name="username" />
                        <input class="inp-txt inp-reg" type="password" placeholder="Password" name="password" />
                    </article>
                    <article class="inp-group">
                        <input class="inp-txt inp-reg" type="text" placeholder="Email ID (.upes.ac.in)" name="email" />
                        <input class="inp-txt inp-reg" type="text" placeholder="Contact Number" name="number" />
                    </article>
                    <article class="inp-group">
                        <input class="inp-txt inp-reg" type="text" placeholder="Course (only for students)" name="course" />
                        <input class="inp-txt inp-reg" type="number" placeholder="Year (only for students)" name="Year" />
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
