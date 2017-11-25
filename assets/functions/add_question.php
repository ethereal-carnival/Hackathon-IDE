<?php

    $text = $_POST['question'];
    $U_id="";
    $str="ABCDEFGHIJKLMNOPQRSTVabcdefghijklmnopqrstuvwxyz0123456789";

    for ($t=0;t<4;++t){
        $c=rand(0,42);
        $U_id=$U_id."$str[c]";
    }

    $conn = mysql_connect("localhost","root","","UCODE");

    $sql = "INSERT INTO questions (Description,Status,U_id )
    VALUES ('$text', 'Not Answered', '$U_id')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    mysql_close()
/>
