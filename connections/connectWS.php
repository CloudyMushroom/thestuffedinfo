<?php
    $userHost = "localhost";
    $userName = "root";
    $userPass = "";
    $databaseName = "wsaccounts";
    
    $conn = mysqli_connect($userHost, $userName, $userPass, $databaseName);

    if(!$conn)
    {
        die("CONNECTION TO THE DATABASE IS FAILED");
    }

?>

