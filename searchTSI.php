<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>tSi | theStuffedinfo</title>
        <link rel="stylesheet" href="Design/wsDesign.css">
        <link rel="stylesheet" href="Design/own.css">
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
            if(isset($_POST['eng']))
            {
                $dbEngTerm = $_POST['dbEngTerm'];                

                $engQuery = "SELECT * FROM tblenglish WHERE (dbEngTerm LIKE '%".$dbEngTerm."%')";                
                $engResult = mysqli_query($conn, $engQuery);
                
                $engQuery2 = "SELECT * FROM tblenglish WHERE dbEngTerm = '$dbEngTerm' LIMIT 1";   
                $engResult2 = mysqli_query($conn, $engQuery2);
                
                
                if($engResult && mysqli_num_rows($engResult)==1)
                {        
                    $engBreaks = mysqli_fetch_assoc($engResult);                
                    $_SESSION['dbEngTerm'] = $engBreaks['dbEngTerm'];
                    $_SESSION['dbEnglishCont'] = $engBreaks['dbEnglishCont'];
                    $_SESSION['dbEngRef'] = $engBreaks['dbEngRef'];
                    header("Location: subjects/english.php");
                    
                }
                
                else if($engResult2 && mysqli_num_rows($engResult2)==1)
                {
                    $engBreaks = mysqli_fetch_assoc($engResult2);
                    $_SESSION['dbEngTerm'] = $engBreaks['dbEngTerm'];
                    $_SESSION['dbEnglishCont'] = $engBreaks['dbEnglishCont'];
                    $_SESSION['dbEngRef'] = $engBreaks['dbEngRef'];
                    header("Location: subjects/english.php");
                    
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
                            <div>NO RECORD</div>
                            <div>
                                You can use comment to send suggestions to the developers.
                                <br>                                                                
                                A wizard may insert an entry but only if the wizard is eligible to insert it.
                            </div>
                            <br>
                            <a class="hmPage" onclick="goBacc()">Go Back</a>
                        </div>     
                    </div>
    
                    <script>
                        if (window.history.replaceState)
                        {
                            window.history.replaceState(null, null, window.location.href);
                        }

                        function goBacc() 
                        {
                            window.history.back();
                        }
                    </script>
                    ';  
                }
                
            }

            else if(isset($_POST['sci']))
            {
                $dbSciTerm = $_POST['dbSciTerm'];                

                $sciQuery = "SELECT * FROM tblscience WHERE (dbSciTerm LIKE '%".$dbSciTerm."%')";                
                $sciResult = mysqli_query($conn, $sciQuery);
                
                $sciQuery2 = "SELECT * FROM tblscience WHERE dbSciTerm = '$dbSciTerm' LIMIT 1";   
                $sciResult2 = mysqli_query($conn, $sciQuery2);
                
                
                if($sciResult && mysqli_num_rows($sciResult)==1)
                {        
                    $sciBreaks = mysqli_fetch_assoc($sciResult);                
                    $_SESSION['dbSciTerm'] = $sciBreaks['dbSciTerm'];
                    $_SESSION['dbScienceCont'] = $sciBreaks['dbScienceCont'];
                    $_SESSION['dbSciRef'] = $sciBreaks['dbSciRef'];
                    header("Location: subjects/science.php");
                }
                
                else if($sciResult2 && mysqli_num_rows($sciResult2)==1)
                {
                    $sciBreaks = mysqli_fetch_assoc($sciResult2);
                    $_SESSION['dbSciTerm'] = $sciBreaks['dbSciTerm'];
                    $_SESSION['dbScienceCont'] = $sciBreaks['dbScienceCont'];
                    $_SESSION['dbSciRef'] = $sciBreaks['dbSciRef'];
                    header("Location: subjects/science.php");
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
                            <div>NO RECORD</div>
                            <div>
                                You can use comment to send suggestions to the developers.
                                <br>                                                                
                                A wizard may insert an entry but only if the wizard is eligible to insert it.
                            </div>
                            <br>
                            <a class="hmPage" onclick="goBacc()">Go Back</a>
                        </div>     
                    </div>
    
                    <script>
                        if (window.history.replaceState)
                        {
                            window.history.replaceState(null, null, window.location.href);
                        }

                        function goBacc() 
                        {
                            window.history.back();
                        }
                    </script>
                    ';  
                }
                
            }

            else if(isset($_POST['math']))
            {
                $dbMathTerm = $_POST['dbMathTerm'];                

                $MathQuery = "SELECT * FROM tblmath WHERE (dbMathTerm LIKE '%".$dbMathTerm."%')";                
                $MathResult = mysqli_query($conn, $MathQuery);
                
                $MathQuery2 = "SELECT * FROM tblmath WHERE dbMathTerm = '$dbMathTerm' LIMIT 1";   
                $MathResult2 = mysqli_query($conn, $MathQuery2);
                
                
                if($MathResult && mysqli_num_rows($MathResult)==1)
                {        
                    $MathBreaks = mysqli_fetch_assoc($MathResult);                
                    $_SESSION['dbMathTerm'] = $MathBreaks['dbMathTerm'];
                    $_SESSION['dbMathCont'] = $MathBreaks['dbMathCont'];
                    $_SESSION['dbMathRef'] = $MathBreaks['dbMathRef'];
                    header("Location: subjects/math.php");
                    
                }
                
                else if($MathResult2 && mysqli_num_rows($MathResult2)==1)
                {
                    $MathBreaks = mysqli_fetch_assoc($MathResult2);
                    $_SESSION['dbMathTerm'] = $MathBreaks['dbMathTerm'];
                    $_SESSION['dbMathCont'] = $MathBreaks['dbMathCont'];
                    $_SESSION['dbMathRef'] = $MathBreaks['dbMathRef'];
                    header("Location: subjects/math.php");
                    
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
                            <div>NO RECORD</div>
                            <div>
                                You can use comment to send suggestions to the developers.
                                <br>                                                                
                                A wizard may insert an entry but only if the wizard is eligible to insert it.
                            </div>
                            <br>
                            <a class="hmPage" onclick="goBacc()">Go Back</a>
                        </div>     
                    </div>
    
                    <script>
                        if (window.history.replaceState)
                        {
                            window.history.replaceState(null, null, window.location.href);
                        }

                        function goBacc() 
                        {
                            window.history.back();
                        }
                    </script>
                    '; 
                }
                
            }
            else if(isset($_POST['pe']))
            {
                $dbPETerm = $_POST['dbPETerm'];                

                $PEQuery = "SELECT * FROM tblpe WHERE (dbPETerm LIKE '%".$dbPETerm."%')";                
                $PEResult = mysqli_query($conn, $PEQuery);
                
                $PEQuery2 = "SELECT * FROM tblpe WHERE dbPETerm = '$dbPETerm' LIMIT 1";   
                $PEResult2 = mysqli_query($conn, $PEQuery2);
                
                
                if($PEResult && mysqli_num_rows($PEResult)==1)
                {        
                    $PEBreaks = mysqli_fetch_assoc($PEResult);                
                    $_SESSION['dbPETerm'] = $PEBreaks['dbPETerm'];
                    $_SESSION['dbPECont'] = $PEBreaks['dbPECont'];                    
                    $_SESSION['dbPERef'] = $PEBreaks['dbPERef'];  
                    header("Location: subjects/pe.php");
                }
                
                else if($PEResult2 && mysqli_num_rows($PEResult2)==1)
                {
                    $PEBreaks = mysqli_fetch_assoc($PEResult2);
                    $_SESSION['dbPETerm'] = $PEBreaks['dbPETerm'];
                    $_SESSION['dbPECont'] = $PEBreaks['dbPECont'];                    
                    $_SESSION['dbPERef'] = $PEBreaks['dbPERef'];   
                    header("Location: subjects/pe.php");                 
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
                            <div>NO RECORD</div>
                            <div>
                                You can use comment to send suggestions to the developers.
                                <br>                                                                
                                A wizard may insert an entry but only if the wizard is eligible to insert it.
                            </div>
                            <br>
                            <a class="hmPage" onclick="goBacc()">Go Back</a>
                        </div>     
                    </div>
    
                    <script>
                        if (window.history.replaceState)
                        {
                            window.history.replaceState(null, null, window.location.href);
                        }

                        function goBacc() 
                        {
                            window.history.back();
                        }
                    </script>
                    '; 
                }
            }
            else if(isset($_POST['accnt']))
            {
                $dbAccntTerm = $_POST['dbAccntTerm'];                

                $AccntQuery = "SELECT * FROM tblaccnt WHERE (dbAccntTerm LIKE '%".$dbAccntTerm."%')";                
                $AccntResult = mysqli_query($conn, $AccntQuery);
                
                $AccntQuery2 = "SELECT * FROM tblaccnt WHERE dbAccntTerm = '$dbAccntTerm' LIMIT 1";   
                $AccntResult2 = mysqli_query($conn, $AccntQuery2);
                
                
                if($AccntResult && mysqli_num_rows($AccntResult)==1)
                {        
                    $AccntBreaks = mysqli_fetch_assoc($AccntResult);                
                    $_SESSION['dbAccntTerm'] = $AccntBreaks['dbAccntTerm'];
                    $_SESSION['dbAccntCont'] = $AccntBreaks['dbAccntCont'];
                    $_SESSION['dbAccntRef'] = $AccntBreaks['dbAccntRef'];
                    header("Location: subjects/account.php");
                }
                
                else if($AccntResult2 && mysqli_num_rows($AccntResult2)==1)
                {
                    $AccntBreaks = mysqli_fetch_assoc($AccntResult2);
                    $_SESSION['dbAccntTerm'] = $AccntBreaks['dbAccntTerm'];
                    $_SESSION['dbAccntCont'] = $AccntBreaks['dbAccntCont'];
                    $_SESSION['dbAccntRef'] = $AccntBreaks['dbAccntRef'];
                    header("Location: subjects/account.php");
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
                            <div>NO RECORD</div>
                            <div>
                                You can use comment to send suggestions to the developers.
                                <br>                                                                
                                A wizard may insert an entry but only if the wizard is eligible to insert it.
                            </div>
                            <br>
                            <a class="hmPage" onclick="goBacc()">Go Back</a>
                        </div>     
                    </div>
    
                    <script>
                        if (window.history.replaceState)
                        {
                            window.history.replaceState(null, null, window.location.href);
                        }

                        function goBacc() 
                        {
                            window.history.back();
                        }
                    </script>
                    '; 
                }
                
            }
            else if(isset($_POST['poli']))
            {
                $dbPolTerm = $_POST['dbPolTerm'];                

                $PolQuery = "SELECT * FROM tblpolitics WHERE (dbPolTerm LIKE '%".$dbPolTerm."%')";                
                $PolResult = mysqli_query($conn, $PolQuery);
                
                $PolQuery2 = "SELECT * FROM tblpolitics WHERE dbPolTerm = '$dbPolTerm' LIMIT 1";   
                $PolResult2 = mysqli_query($conn, $PolQuery2);
                
                
                if($PolResult && mysqli_num_rows($PolResult)==1)
                {        
                    $PolBreaks = mysqli_fetch_assoc($PolResult);                                    
                    $_SESSION['dbPolTerm'] = $PolBreaks['dbPolTerm'];
                    $_SESSION['dbPolCont'] = $PolBreaks['dbPolCont'];
                    $_SESSION['dbPolRef'] = $PolBreaks['dbPolRef'];
                    header("Location: subjects/poli.php");
                }
                
                else if($PolResult2 && mysqli_num_rows($PolResult2)==1)
                {
                    $PolBreaks = mysqli_fetch_assoc($PolResult2);
                    $_SESSION['dbPolTerm'] = $PolBreaks['dbPolTerm'];
                    $_SESSION['dbPolCont'] = $PolBreaks['dbPolCont'];
                    $_SESSION['dbPolRef'] = $PolBreaks['dbPolRef'];
                    header("Location: subjects/poli.php");
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
                            <div>NO RECORD</div>
                            <div>
                                You can use comment to send suggestions to the developers.
                                <br>                                                                
                                A wizard may insert an entry but only if the wizard is eligible to insert it.
                            </div>
                            <br>
                            <a class="hmPage" onclick="goBacc()">Go Back</a>
                        </div>     
                    </div>
    
                    <script>
                        if (window.history.replaceState)
                        {
                            window.history.replaceState(null, null, window.location.href);
                        }

                        function goBacc() 
                        {
                            window.history.back();
                        }
                    </script>
                    ';  
                }
                

            }
            else if(isset($_POST['hist']))
            {
                $dbHistTerm = $_POST['dbHistTerm'];                

                $HistQuery = "SELECT * FROM tblhistory WHERE (dbHistTerm LIKE '%".$dbHistTerm."%')";                
                $HistResult = mysqli_query($conn, $HistQuery);
                
                $HistQuery2 = "SELECT * FROM tblhistory WHERE dbHistTerm = '$dbHistTerm' LIMIT 1";   
                $HistResult2 = mysqli_query($conn, $HistQuery2);
                
                
                if($HistResult && mysqli_num_rows($HistResult)==1)
                {        
                    $HistBreaks = mysqli_fetch_assoc($HistResult);                
                    $_SESSION['dbHistTerm'] = $HistBreaks['dbHistTerm'];
                    $_SESSION['dbHistCont'] = $HistBreaks['dbHistCont'];
                    $_SESSION['dbHistRef'] = $HistBreaks['dbHistRef'];
                    header("Location: subjects/history.php");
                }
                
                else if($HistResult2 && mysqli_num_rows($HistResult2)==1)
                {
                    $HistBreaks = mysqli_fetch_assoc($HistResult2);
                    $_SESSION['dbHistTerm'] = $HistBreaks['dbHistTerm'];
                    $_SESSION['dbHistCont'] = $HistBreaks['dbHistCont'];
                    $_SESSION['dbHistRef'] = $HistBreaks['dbHistRef'];
                    header("Location: subjects/history.php");
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
                            <div>NO RECORD</div>
                            <div>
                                You can use comment to send suggestions to the developers.
                                <br>                                                                
                                A wizard may insert an entry but only if the wizard is eligible to insert it.
                            </div>
                            <br>
                            <a class="hmPage" onclick="goBacc()">Go Back</a>
                        </div>     
                    </div>
    
                    <script>
                        if (window.history.replaceState)
                        {
                            window.history.replaceState(null, null, window.location.href);
                        }

                        function goBacc() 
                        {
                            window.history.back();
                        }
                    </script>
                    '; 
                }
                
            }
            else if(isset($_POST['tech']))
            {
                $dbTechTerm = $_POST['dbTechTerm'];                

                $TechQuery = "SELECT * FROM tbltechnology WHERE (dbTechTerm LIKE '%".$dbTechTerm."%')";                
                $TechResult = mysqli_query($conn, $TechQuery);
                
                $TechQuery2 = "SELECT * FROM tbltechnology WHERE dbTechTerm = '$dbTechTerm' LIMIT 1";   
                $TechResult2 = mysqli_query($conn, $TechQuery2);
                
                
                if($TechResult && mysqli_num_rows($TechResult)==1)
                {        
                    $TechBreaks = mysqli_fetch_assoc($TechResult);                
                    $_SESSION['dbTechTerm'] = $TechBreaks['dbTechTerm'];
                    $_SESSION['dbTechCont'] = $TechBreaks['dbTechCont'];
                    $_SESSION['dbTechRef'] = $TechBreaks['dbTechRef'];
                    header("Location: subjects/tech.php");
                    
                }
                
                else if($TechResult2 && mysqli_num_rows($TechResult2)==1)
                {
                    $TechBreaks = mysqli_fetch_assoc($TechResult2);
                    $_SESSION['dbTechTerm'] = $TechBreaks['dbTechTerm'];
                    $_SESSION['dbTechCont'] = $TechBreaks['dbTechCont'];
                    $_SESSION['dbTechRef'] = $TechBreaks['dbTechRef'];
                    header("Location: subjects/tech.php");
                
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
                            <div>NO RECORD</div>
                            <div>
                                You can use comment to send suggestions to the developers.
                                <br>                                                                
                                A wizard may insert an entry but only if the wizard is eligible to insert it.
                            </div>
                            <br>
                            <a class="hmPage" onclick="goBacc()">Go Back</a>
                        </div>     
                    </div>
    
                    <script>
                        if (window.history.replaceState)
                        {
                            window.history.replaceState(null, null, window.location.href);
                        }

                        function goBacc() 
                        {
                            window.history.back();
                        }
                    </script>
                    '; 
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
                        <a class="hmPage" href="index.html">Homepage</a>
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
        ?>
         
        
    </body>
</html>