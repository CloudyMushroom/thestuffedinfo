<?php
    session_start();      
    include("../connections/connectWS.php");

    if(isset($_POST['send']))
    {
        $commentsWS = $_POST['commentsWS'];
        mysqli_query($conn ,"INSERT INTO comments (commentsWS) VALUES ('$commentsWS')");
        header("Location: comSucceed.html");
        die();
    }
    
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
 
    <title>Comments</title>
</head>
<body>
<?php 
        if(isset($_SESSION['wFirstName']) || isset($_SESSION['sFirstName']))
        {
           echo
           '    
               
                    <div class="searchEmbed" style="margin-right: 1em;">                    
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
            <div class="searchContent" style=" transform: translateY(-120px); ">
                <form method="POST" autocomplete=off>                    
                    <span id="subChange" class="searchLabel">theStuffedInfo</span>
                    <p>Send your comments/suggestions to the developers.</p>
                    <div class="row">
                        <div class="col">
                           <strong><label>COMMENT:</label></strong> 
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <textarea name="commentsWS" id="comArea" cols="160" rows="15" maxlength="8218" required></textarea>
                        </div>
                    </div>      
                                                                                   
                    <div class="searchEmbed">                   
                        <a class="searchButton" style=" margin: .5em; " onclick="goBacc()">back</a>  
                        <input type="submit" class="searchButton" name="send" value="send" style=" margin: .5em; ">                                                                                                                                                                          
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