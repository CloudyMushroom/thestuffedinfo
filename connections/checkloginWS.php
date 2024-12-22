<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>What did you do?</title>
        <link rel="stylesheet" href="../Design/wsDesign.css">
        <link rel="stylesheet" href="../Design/own.css">
    </head>

    <body>
        
    <?php
    session_start();
    include("connectWS.php");

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        /*             VARIABLES           */
        $intEmail = $_POST['intEmail'];
        $intPassword = $_POST['intPassword'];
        /*--------------------------------*/


        /*               QUERIES AND RESULTS FOR WIZARDS                   */
        $weQuery = "SELECT * FROM wizards WHERE wEmail = '$intEmail' limit 1";             
        $weResult = mysqli_query($conn, $weQuery);

        /*---------------------------------------------------------------*/

        /* 
            We are looking in the same database but different table that is
            the reason why we have 2 separate queries and results for login.
        */

        /*               QUERIES AND RESULTS FOR STUDENTS               */
        $seQuery = "SELECT * FROM students WHERE sEmail = '$intEmail' LIMIT 1";             
        $seResult = mysqli_query($conn, $seQuery);
  
        /*---------------------------------------------------------------*/     
        
        if($weResult && mysqli_num_rows($weResult)==1)
        {           
            $wUserData = mysqli_fetch_assoc($weResult); /* Breaks the Object Query in String Array or Associative Array*/
            if($wUserData['wPass'] == $intPassword)
            {
                $wFirstName = "SELECT wFirstName, wEmail FROM wizards WHERE wEmail = '$intEmail' LIMIT 1";
                $result = mysqli_query($conn, $wFirstName);

                if ($result && mysqli_num_rows($result) > 0)
                {
                    $firstName = mysqli_fetch_assoc($result);                                        
                    $_SESSION['wFirstName'] = $firstName['wFirstName'];
                    header("Location: ../wGreetings.php");      
                }                 
            }
            else
            {
                echo 
                '
                <style>
                    .flexReg, .succReg
                    {                                                                  
                        transition: .5s;
                        visibility: visible;
                    }
                    .succReg:first-child
                    {
                        color: red;
                    }
                </style>
                <div class="flexReg">
                    <div class="succReg">            
                        <div>LOGIN FAILED</div>
                        <div>Your Email or Password is incorrect</div>
                        <br>
                        <a class="hmPage" href="../index.html">HOMEPAGE</a>
                    </div>     
                </div>
                ';   
            }
            
        }
        else if ($seResult && mysqli_num_rows($seResult)==1)
        {
            $sUserData = mysqli_fetch_assoc($seResult);            
            if($sUserData['sPass'] == $intPassword)
            {
                $sFirstName = "SELECT sFirstName, sEmail FROM students WHERE sEmail = '$intEmail' LIMIT 1";
                $result = mysqli_query($conn, $sFirstName);

                if ($result && mysqli_num_rows($result) > 0)
                {
                    $firstName = mysqli_fetch_assoc($result);                                        
                    $_SESSION['sFirstName'] = $firstName['sFirstName'];
                    header("Location: ../sGreetings.php");                    
                }                                
            }
            else
            {
                echo 
                '
                <style>
                    .flexReg, .succReg
                    {                                                                  
                        transition: .5s;
                        visibility: visible;
                    }
                    .succReg:first-child
                    {
                        color: red;
                    }
                </style>
                <div class="flexReg">
                    <div class="succReg">            
                        <div>LOGIN FAILED</div>
                        <div>Your Email or Password is incorrect</div>
                        <br>
                        <a class="hmPage" href="../index.html">HOMEPAGE</a>
                    </div>     
                </div>
                ';   
            }
        }
        else if (empty($intEmail) && empty($intPassword))
        {
            echo 
                '
                <style>
                    .flexReg, .succReg
                    {                                                                  
                        transition: .5s;
                        visibility: visible;
                    }
                    .succReg:first-child
                    {
                        color: red;
                    }
                </style>
                <div class="flexReg">
                    <div class="succReg">            
                        <div>LOGIN FAILED</div>
                        <div>Please enter your Email and Password</div>
                        <br>
                        <a class="hmPage" href="../index.html">HOMEPAGE</a>
                    </div>     
                </div>
                ';            
        }
        else
        {
            echo 
                '
                <style>
                    .flexReg, .succReg
                    {                                                                  
                        transition: .5s;
                        visibility: visible;
                    }
                    .succReg:first-child
                    {
                        color: red;
                    }
                </style>
                <div class="flexReg">
                    <div class="succReg">            
                        <div>LOGIN FAILED</div>
                        <div>Your Email or Password is incorrect</div>
                        <br>
                        <a class="hmPage" href="../index.html">HOMEPAGE</a>
                    </div>     
                </div>
                ';                   
        }

    }

?>

    </body>

</html>
    