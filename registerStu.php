<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration of Student</title>
    <link rel="stylesheet" href="Design/gridsystem.css">
    <link rel="stylesheet" href="Design/own.css">
    <link rel="stylesheet" href="Design/wsDesign.css">
    <link rel="stylesheet" href="Design/mediaQueries.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
<body>
    <?php
        include("connections/connectWS.php");
        
        if($_SERVER['REQUEST_METHOD']=="POST")
        {
            $sFirstName = $_POST['sFirstName'];
            $sLastName = $_POST['sLastName'];
            $sEmail = $_POST['sEmail'];
            $sPass = $_POST['sPass'];        
            $sConNum = $_POST['sConNum'];

            $query = "INSERT INTO students (sFirstName, sLastName, sEmail, sPass, sConNum) VALUES ('$sFirstName', '$sLastName', '$sEmail', '$sPass', '$sConNum')";
            $result = mysqli_query($conn, $query);
            
            if($result == true)
            {
                echo                 
                '
                    <style>
                        body > .row
                        {
                            opacity: 30%;
                            pointer-events: none;
                        }
                        .flexReg, .succReg
                        {                                                                  
                            transition: .5s;
                            visibility: visible;
                        }
                    </style>                    
                    <div class="flexReg">
                        <div class="succReg">            
                            <div>REGISTRATION SUCCESSFUL</div>
                            <div>Go back to homepage and login your newly created account</div>
                            <br>
                            <a class="hmPage" href="index.html">HOMEPAGE</a>
                        </div>     
                    </div>
                ';                   
            }
            else
            {   
                echo 
                '
                    <script>
                        alert("Please try again");
                    </script>
                ';
                header("registerStu.php");
            }
            
        }
    ?>
    <div  class="row">

        <div class="col-xl"></div> <!--for Left side spacing-->
        <div id="stuRegister" class="col-xl">

            <div class="regTitle">
                <a class="fLex" href="index.html">
                    <h1>theStuffedInfo</h1>                    
                </a>
                <i class="fas fa-book fa-3x"></i>
            </div>

            <div class="regHead">                          
                <p>Creating a Student account.</p>
            </div>

            <form method="POST" autocomplete="off">
                <div class="row">
                    <div class="col-md">
                        <input type="text" name="sFirstName" placeholder="First Name" maxlength="20" required>
                    </div>
                    <div class="col-md">
                        <input type="text" name="sLastName" placeholder="Last Name" maxlength="20" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md">
                        <input type="email" name="sEmail" placeholder="Email Address" maxlength="40" required>
                    </div>                    
                </div>

                <div class="row">
                    <div class="col-md">
                        <input type="password" name="sPass" placeholder="Password" maxlength="25" required>
                    </div>                    
                </div>

                <div class="row">
                    <div class="col-md">
                        <input type="text" name="sConNum" placeholder="Contact Number" maxlength="15" required>
                    </div>                    
                </div>
                                                                   
                <div class="row">
                    <div class="col-sm">
                        <div class="loginButton">
                            <a>login instead</a>                             
                        </div>                   
                    </div>
                    
                    <div class="col-sm">
                        <div class="mitButton">
                            <input  class="subButton" type="submit" value="Submit">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-xl"></div> <!-- for Right side spacing-->
    </div>

    <script>
        if (window.history.replaceState)
        {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>
</html>