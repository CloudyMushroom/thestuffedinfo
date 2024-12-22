<?php
session_start();

    if(isset($_SESSION['wFirstName']))
    {
        unset($_SESSION['wFirstName']);  
        session_destroy();      
    }
    else if(isset($_SESSION['sFirstName']))
    {
        unset($_SESSION['sFirstName']);
        session_destroy();
    }
    
header("Location: index.html");
die;

?>