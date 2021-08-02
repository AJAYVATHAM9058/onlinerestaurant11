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
    $n = $_POST["username"];
    $e = $_POST["email"];
    $p = $_POST["psw"];
  
    $con = $_POST["number"];

   
        $sqlsign = "INSERT INTO register(username,email,password,phone)
        VALUES ('$n','$e','$p','$con')";
        if (mysqli_query($conn, $sqlsign))
        {
            echo "you had sign in home to home delivery";
        } 
        else 
        {
            echo "Error: " . $sqlsign . "<br>" . mysqli_error($conn);
        }
    
   
    
    mysqli_close($conn);

?>