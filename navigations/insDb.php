<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>INSERTION COMPLETE</title>
        <link rel="stylesheet" href="../Design/wsDesign.css">
        <link rel="stylesheet" href="../Design/own.css">
    </head>

    <body>
        <?php
        /* To avoid additional file, internal connection to the database is much better to utilize. */
               $userHost = "localhost";
               $userName = "root";
               $userPass = "";
               $databaseName = "thestuffedinfo";
               
               $conn = mysqli_connect($userHost, $userName, $userPass, $databaseName);
           
               if(!$conn)
               {
                   die("CONNECTION TO THE DATABASE IS FAILED");
               }            
        /* -----------------------------------------------------------------------------------------  */
        session_start();
        if(isset($_SESSION['wFirstName']))
        {
            if(isset($_POST['eng']))
            {
                $dbEngTerm = $_POST['dbEngTerm'];
                $dbEnglishCont = $_POST['dbEnglishCont'];
                $dbEngRef = $_POST['dbEngRef'];
                
                mysqli_query($conn ,"INSERT INTO tblenglish (dbEngTerm, dbEnglishCont, dbEngRef) VALUES ('$dbEngTerm', '$dbEnglishCont', '$dbEngRef')");
                echo 
                '
                <style>
                    .flexReg, .succReg
                    {                                                                  
                        transition: .5s;
                        visibility: visible;
                    }                    
                </style>

                <div class="flexReg">
                    <div class="succReg">            
                        <div>INSERTION SUCCEEDED</div>
                        <div>Your entry is in the glossary and it is ready to view, you can search it now</div>
                        <br>
                        <a class="hmPage" href="insertion.php">Your Homepage</a>
                    </div>     
                </div>

                <script>
                    if (window.history.replaceState)
                    {
                        window.history.replaceState(null, null, window.location.href);
                    }
                </script>
                ';   
            }

            else if(isset($_POST['sci']))
            {
                $dbSciTerm = $_POST['dbSciTerm'];
                $dbScienceCont = $_POST['dbScienceCont'];
                $dbSciRef = $_POST['dbSciRef'];

                mysqli_query($conn ,"INSERT INTO tblscience (dbSciTerm, dbScienceCont, dbSciRef) VALUES ('$dbSciTerm', '$dbScienceCont', '$dbSciRef')");
                echo 
                '
                <style>
                    .flexReg, .succReg
                    {                                                                  
                        transition: .5s;
                        visibility: visible;
                    }                    
                </style>

                <div class="flexReg">
                    <div class="succReg">            
                        <div>INSERTION SUCCEEDED</div>
                        <div>Your entry is in the glossary and it is ready to view, you can search it now</div>
                        <br>
                        <a class="hmPage" href="insertion.php">Your Homepage</a>
                    </div>     
                </div>

                <script>
                    if (window.history.replaceState)
                    {
                        window.history.replaceState(null, null, window.location.href);
                    }
                </script>
                ';   
            }

            else if(isset($_POST['math']))
            {
                $dbMathTerm = $_POST['dbMathTerm'];
                $dbMathCont = $_POST['dbMathCont'];
                $dbMathRef = $_POST['dbMathRef']; 

                mysqli_query($conn ,"INSERT INTO tblmath (dbMathTerm, dbMathCont, dbMathRef) VALUES ('$dbMathTerm', '$dbMathCont', '$dbMathRef')");               
                echo 
                '
                <style>
                    .flexReg, .succReg
                    {                                                                  
                        transition: .5s;
                        visibility: visible;
                    }                    
                </style>

                <div class="flexReg">
                    <div class="succReg">            
                        <div>INSERTION SUCCEEDED</div>
                        <div>Your entry is in the glossary and it is ready to view, you can search it now</div>
                        <br>
                        <a class="hmPage" href="insertion.php">Your Homepage</a>
                    </div>     
                </div>

                <script>
                    if (window.history.replaceState)
                    {
                        window.history.replaceState(null, null, window.location.href);
                    }
                </script>
                ';   

            }
            else if(isset($_POST['pe']))
            {
                $dbPETerm = $_POST['dbPETerm'];
                $dbPECont = $_POST['dbPECont'];
                $dbPERef = $_POST['dbPERef'];

                mysqli_query($conn ,"INSERT INTO tblpe (dbPETerm, dbPECont, dbPERef) VALUES ('$dbPETerm', '$dbPECont', '$dbPERef')");               
                echo 
                '
                <style>
                    .flexReg, .succReg
                    {                                                                  
                        transition: .5s;
                        visibility: visible;
                    }                    
                </style>

                <div class="flexReg">
                    <div class="succReg">            
                        <div>INSERTION SUCCEEDED</div>
                        <div>Your entry is in the glossary and it is ready to view, you can search it now</div>
                        <br>
                        <a class="hmPage" href="insertion.php">Your Homepage</a>
                    </div>     
                </div>

                <script>
                    if (window.history.replaceState)
                    {
                        window.history.replaceState(null, null, window.location.href);
                    }
                </script>
                ';   

            }
            else if(isset($_POST['accnt']))
            {
                $dbAccntTerm = $_POST['dbAccntTerm'];
                $dbAccntCont = $_POST['dbAccntCont'];
                $dbAccntRef = $_POST['dbAccntRef'];

                mysqli_query($conn ,"INSERT INTO tblaccnt (dbAccntTerm, dbAccntCont, dbAccntRef) VALUES ('$dbAccntTerm', '$dbAccntCont', '$dbAccntRef')");               
                echo 
                '
                <style>
                    .flexReg, .succReg
                    {                                                                  
                        transition: .5s;
                        visibility: visible;
                    }                    
                </style>

                <div class="flexReg">
                    <div class="succReg">            
                        <div>INSERTION SUCCEEDED</div>
                        <div>Your entry is in the glossary and it is ready to view, you can search it now</div>
                        <br>
                        <a class="hmPage" href="insertion.php">Your Homepage</a>
                    </div>     
                </div>

                <script>
                    if (window.history.replaceState)
                    {
                        window.history.replaceState(null, null, window.location.href);
                    }
                </script>
                ';   
            }
            else if(isset($_POST['poli']))
            {
                $dbPolTerm = $_POST['dbPolTerm'];
                $dbPolCont = $_POST['dbPolCont'];
                $dbPolRef = $_POST['dbPolRef'];                

                mysqli_query($conn ,"INSERT INTO tblpolitics (dbPolTerm, dbPolCont, dbPolRef) VALUES ('$dbPolTerm', '$dbPolCont', '$dbPolRef')");   
                 echo 
                '
                <style>
                    .flexReg, .succReg
                    {                                                                  
                        transition: .5s;
                        visibility: visible;
                    }                    
                </style>

                <div class="flexReg">
                    <div class="succReg">            
                        <div>INSERTION SUCCEEDED</div>
                        <div>Your entry is in the glossary and it is ready to view, you can search it now</div>
                        <br>
                        <a class="hmPage" href="insertion.php">Your Homepage</a>
                    </div>     
                </div>

                <script>
                    if (window.history.replaceState)
                    {
                        window.history.replaceState(null, null, window.location.href);
                    }
                </script>
                ';               

            }
            else if(isset($_POST['hist']))
            {
                $dbHistTerm = $_POST['dbHistTerm'];
                $dbHistCont = $_POST['dbHistCont'];
                $dbHistRef = $_POST['dbHistRef'];

                mysqli_query($conn ,"INSERT INTO tblhistory (dbHistTerm, dbHistCont, dbHistRef) VALUES ('$dbHistTerm', '$dbHistCont', '$dbHistRef')"); 
                 echo 
                '
                <style>
                    .flexReg, .succReg
                    {                                                                  
                        transition: .5s;
                        visibility: visible;
                    }                                 
                                  
                </style>
             
                <div class="flexReg">
                    <div class="succReg">            
                        <div>INSERTION SUCCEEDED</div>
                        <div>Your entry is in the glossary and it is ready to view, you can search it now</div>
                        <br>
                        <a class="hmPage" href="insertion.php">Your Homepage</a>
                    </div>     
                </div>

                <script>
                    if (window.history.replaceState)
                    {
                        window.history.replaceState(null, null, window.location.href);
                    }
                </script>
                ';                 
            }
            else if(isset($_POST['tech']))
            {
                $dbTechTerm = $_POST['dbTechTerm'];
                $dbTechCont = $_POST['dbTechCont'];
                $dbTechRef = $_POST['dbTechRef'];

                mysqli_query($conn ,"INSERT INTO tbltechnology (dbTechTerm, dbTechCont, dbTechRef) VALUES ('$dbTechTerm', '$dbTechCont', '$dbTechRef')"); 
                 echo 
                '
                <style>
                    .flexReg, .succReg
                    {                                                                  
                        transition: .5s;
                        visibility: visible;
                    }    
                                                                
                </style>

                <div class="flexReg">
                    <div class="succReg">            
                        <div>INSERTION SUCCEEDED</div>
                        <div>Your entry is in the glossary and it is ready to view, you can search it now</div>
                        <br>
                        <a class="hmPage" href="insertion.php">Your Homepage</a>
                    </div>     
                </div>

                <script>
                    if (window.history.replaceState)
                    {
                        window.history.replaceState(null, null, window.location.href);
                    }
                </script>
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
                    .succReg > div
                    {
                        color:red;
                    }                    
                </style>

                <div class="flexReg">
                    <div class="succReg">            
                        <div>An error has occurred</div>
                        <div>Please try again</div>
                        <br>
                        <a class="hmPage" href="insertion.php">Your Homepage</a>
                    </div>     
                </div>

                <script>
                    if (window.history.replaceState)
                    {
                        window.history.replaceState(null, null, window.location.href);
                    }
                </script>
                ';  
            }
        }
        else
        {
            echo
            '
                <script>
                    alert("AN ERROR HAS OCCURED");
                    window.location= "../index.html";
                </script>
            ';
        }
        ?>
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