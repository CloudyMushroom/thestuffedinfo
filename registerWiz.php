<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration of Wizard</title>
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
                    $wFirstName = $_POST['wFirstName'];
                    $wLastName = $_POST['wLastName'];
                    $wEmail = $_POST['wEmail'];
                    $wPass = $_POST['wPass'];    
                    $wConNum = $_POST['wConNum'];
                    $wWhyWiz = $_POST['wWhyWiz'];
                    $wImg = $_FILES['wImg']['name'];

                    $query = "INSERT INTO wizards (wFirstName, wLastName, wEmail, wPass, wConNum, wWhyWiz, wImg) VALUES ('$wFirstName', '$wLastName', '$wEmail', '$wPass', '$wConNum', '$wWhyWiz', '$wImg')";
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
                          
                        header("registerWiz.php");                                   
                    }
                    
                }
            ?>
    <div class="row">
        <div class="col-xl"></div> <!--for Left side spacing-->
        <div id="wizRegister" class="col-xl">

            <div class="regTitle">
                <a class="fLex" href="index.html">
                    <h1>theStuffedInfo</h1>                    
                </a>
                <i class="fas fa-hat-wizard fa-3x"></i>
            </div>

            <div class="regHead">                          
                <p>Creating a Wizard account.</p>
            </div>
            

            <form method="POST" autocomplete="off" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md">
                        <input type="text" name="wFirstName" placeholder="First Name" maxlength="20" required> 
                    </div>
                    <div class="col-md">
                        <input type="text" name="wLastName" placeholder="Last Name" maxlength="20" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md">
                        <input type="email" name="wEmail" placeholder="Email Address" maxlength="40" required> 
                    </div>                    
                </div>

                <div class="row">
                    <div class="col-md">
                        <input type="password" name="wPass" placeholder="Password" maxlength="25" required>
                    </div>                    
                </div>

                <div class="row">
                    <div class="col-md">
                        <input type="text" name="wConNum" placeholder="Contact Number" maxlength="15" required>
                    </div>                    
                </div>

                <div class="row">
                    <div class="col-md">                        
                        <textarea name="wWhyWiz" placeholder="Why do you want to be a Wizard?" cols="20" rows="5" maxlength="255" required></textarea>
                    </div>                  
                </div>

                <div class="sendPic">
                    <label for="file">click "Choose File" to pick and attach your picture ID</label>                                                           
                    <input type="file" name="wImg" required>
                </div>                               
                
                <div class="row">
                    <div class="col-sm">
                        <div class="loginButton">
                            <a>login instead</a>                             
                        </div>                   
                    </div>
                    
                    <div class="col-sm">
                        <div class="mitButton">
                            <input class="subButton" type="submit" value="Submit">                            
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