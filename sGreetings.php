<?php
    session_start();    
    $firstName['sFirstName'] = $_SESSION['sFirstName'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Design/wsDesign.css">
    <link rel="stylesheet" href="Design/own.css">
    <title>Succeed</title>
</head>
<body>
        <style>
            .flexReg, .succReg
            {                                                                  
                transition: .5s;
                visibility: visible;
            }
            .succReg:first-child
            {
                color: green;
            }
         </style>

        <div class="flexReg">
            <div class="succReg">            
                <div>Greetings Student, <?php echo strtoupper($firstName['sFirstName']). "!";?></div>
                <div>Go to your homepage and click the menu button to explore more!</div>
                <br>
                <a class="hmPage" href="student.php">HOMEPAGE</a>
            </div>     
        </div>


        <script>        
            function preventBack() 
            { 
                window.history.forward(); 
            }  
            setTimeout("preventBack()", 0);  
            window.onunload = function () 
            { 
                null 
            };  
        </script>

</body>
</html>