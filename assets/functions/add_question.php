<?php

    $text = $_POST['question'];
    $U_id="";
    $str="ABCDEFGHIJKLMNOPQRSTVabcdefghijklmnopqrstuvwxyz0123456789";

    for ($t=0;$t<4;++$t){
        $c=rand(0,42);
        $U_id=$U_id."$str[$c]";
    }

    $conn = mysqli_connect("localhost","root","","UCODE");

    $sql = "INSERT INTO questions (description,status,uID )
    VALUES ('$text', 0, '$U_id')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
        header('location: /');
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>
