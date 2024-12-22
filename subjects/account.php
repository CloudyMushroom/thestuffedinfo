<?php
    session_start();      
    $AccntBreaks['dbAccntTerm'] = $_SESSION['dbAccntTerm'];
    $AccntBreaks['dbAccntCont'] = $_SESSION['dbAccntCont'];
    $AccntBreaks['dbAccntRef'] = $_SESSION['dbAccntRef'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Design/gridsystem.css">
    <link rel="stylesheet" href="../Design/own.css">
    <link rel="stylesheet" href="../Design/subDesign.css">    
 
    <title>Accounting</title>
</head>
<body>
    <?php 
        if(isset($_SESSION['wFirstName']) || isset($_SESSION['sFirstName']))
        {
           echo
           '    
               
                    <div class="searchCard" style="margin-bottom: 1em;">                    
                        <a id="going" onclick="goingDark()"> goingDark? </a>
                    </div>                

                <script>
                    function goingDark()
                    {
                        var mainBody = document.getElementsByTagName("body")[0];
                        var lightDark = document.getElementById("going");
                        var head = document.getElementsByTagName("HEAD")[0]; 
                        var link = document.createElement("link");
                        var refe = document.getElementsByClassName("reference")[0];
                        var sButton = document.getElementsByClassName("searchButton")[0];
                        
                        if(mainBody.classList.toggle("dark"))
                        {
                            lightDark.innerHTML = "LightUp!";
                            link.id = "darc";
                            link.rel = "stylesheet";      
                            link.href = "../Design/darkmode.css";     
                            head.appendChild(link); 
                            refe.style.color = "white";
                            sButton.style.color="#FFF205";                                                                
                            sButton.style.border="solid #FFF205 2px";
                            
                        }

                        else
                        {                            
                            lightDark.innerHTML = "goingDark?"                          
                            var linkDark = document.getElementById("darc");
                            linkDark.remove(); 
                            refe.style.color = "#505050";                            
                            sButton.style.color = "#white";
                            sButton.style.border="none";
                            sButton.style.border = "solid #086788 1px";
                            sButton.style.textShadow = "1pt 2pt 3pt rgba(0, 0, 0, 0.4);";
                            sButton.style.fontWeight = "normal";  
                            sButton.style.color="#086788";        
                            
                        }                        
                        
                    }
                </script>
           '
           ;
        }
    ?>

    <div class="searchCard"> <!--search card 1-->                
            <div class="searchContent">
                <form action="insDb.php" method="POST" autocomplete=off>                    

                    <span id="subChange" class="searchLabel"></span>

                    <div class="row">
                        <div class="col">
                            <label>ACCOUNTING</label>
                        </div>
                    </div>

                    <div class="row">
                        <div id="term" class="col">
                            <strong><?php echo $AccntBreaks['dbAccntTerm']; ?></strong>
                        </div>
                    </div>      


                    <div class="row">
                        <div id="meaning" class="col">
                            <?php echo $AccntBreaks['dbAccntCont']; ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label><strong class="reference" >REFERENCE: </strong></label>
                        </div>
                    </div>

                    <div class="row">
                        <div id="reference" class="col">
                            <?php echo $AccntBreaks['dbAccntRef']; ?>
                        </div>
                    </div>
                                           
                    
                    <div class="searchEmbed">                   
                        <a class="searchButton" onclick="goBacc()">Back</a>                                                                           
                    </div>
                </form> 
            </div>
        </div>


<script>
    function goBacc() 
    {
        window.history.back();
    }
</script>

</body>
</html>