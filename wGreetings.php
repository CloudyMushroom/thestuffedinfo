<?php
    session_start();    
    $firstName['wFirstName'] = $_SESSION['wFirstName'];
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
                <div>Greetings Wizard, <?php echo strtoupper($firstName['wFirstName']). "!";?></div>
                <div>Go to your homepage and click the menu button to explore more
                    <br> and as a Wizard you are eligible to insert some terms in the glossary.
                </div>
                <br>
                <a class="hmPage" href="wizard.php">HOMEPAGE</a>
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