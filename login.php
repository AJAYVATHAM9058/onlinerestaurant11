<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "signup";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    session_start();
    $mail=$_POST["email"];
    $pass=$_POST["password"];
    $_SESSION["mail"] = $mail;
    $_SESSION["password"] = $pass;

   /* if (mysqli_query($conn, $sql))
    {
        echo "you had login in  home to home delivery";
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }*/

    mysqli_close($conn);

?>