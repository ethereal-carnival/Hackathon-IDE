<?php

    $u_id=$_POST['U_id'];
    $text=$_POST['source_code'];

    $conn = mysql_connect("localhost","root","","UCODE");

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO answers (U_id, content, marks)
    VALUES ('$u_id', '$text', 0)";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
/>
