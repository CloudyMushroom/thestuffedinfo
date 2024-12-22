<?php
    session_start();
    $firstName['wFirstName'] = $_SESSION['wFirstName'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tSi | theStuffedinfo</title>
    <link rel="stylesheet" href="Design/gridsystem.css"> <!--Layout System-->
    <link rel="stylesheet" href="Design/own.css"> <!--Own Designing-->    
    <link rel="stylesheet" href="Design/mediaQueries.css"> <!--Responsive Tweaking-->    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>

<body>    
    <div class="main_can">
        <div id="theHeader" class="row">
            <div class="col">
                <div class="row">                    
                    <div class="col">
                        <h1>theStuffedInfo</h1>
                    </div>
                   
                    <div id="flexBurger" class="col">
                        <div id="saydBar" class="theSidebar3">                                                        
                            <li><a href="navigations/insertion.php">insert</a></li>
                            <li><a href="navigations/comment.php">comment</a></li>
                            <li><a id="going" onclick="goingDark()">goingDark?</a></li>                     
                            <li><a href="logout.php">logout</a></li>
                            <li><a href="#"><?php echo strtoupper($firstName['wFirstName']);?></a></li>
                        </div>
                        <div class="theMenu">
                            <div class="borgir">

                            </div>
                        </div>
                       
                    </div>
                </div>               
            </div>   
            
        </div> <!--end of rowHeader-->       

        <div id="theBody" class="row">
            <div class="col-md-1" > <!--space filler-->    
                           
            </div><!--left-->

            <div id="theSubBody" class="col-md">
               <p>Hey <strong><?php echo strtoupper($firstName['wFirstName']);?></strong>! Choose a subject or field and search a certain terms or topics that you seek for.</p>
            
                <div  class="row">
                    <div id="bEnglish" class="col-xl">
                        <a onclick="Slide()" href="#">
                            <h2>
                                ENGLISH
                            </h2>
                        </a>
                    </div>

                    <div id="bScience" class="col-xl">
                        <a onclick="Slide()" href="#">
                            <h2>
                                SCIENCE
                            </h2>
                        </a>
                    </div>    
                </div> <!--end of 1stRowBody-->

                <div class="row">
                    <div id="bMath" class="col-xl">
                        <a onclick="Slide()" href="#">
                            <h2>
                                MATHEMATICS
                            </h2>
                        </a>
                    </div>

                    <div id="bPE" class="col-xl">
                        <a onclick="Slide()" href="#">
                            <h2>
                                PHYSICAL EDUCATION
                            </h2>
                        </a>
                    </div>                   
                </div> <!--end of 2ndRowBody-->

                <div class="row">
                    <div id="bAccnt" class="col-xl">                        
                        <a onclick="Slide()" href="#">
                            <h2>
                                ACCOUNTING
                            </h2>
                        </a>
                    </div>

                    <div id="bPol" class="col-xl">
                        <a onclick="Slide()" href="#">
                            <h2>
                                POLITICS
                            </h2>
                        </a>
                    </div>
                </div><!--end of 3rdRowBody-->
                
                <div class="row">                    
                    <div id="bHist" class="col-xl">
                        <a onclick="Slide()" href="#">
                            <h2>
                                HISTORY
                            </h2>
                        </a>
                    </div>

                    <div id="bTech" class="col-xl">
                        <a onclick="Slide()" href="#">
                            <h2>
                                TECHNOLOGY
                            </h2>
                        </a>
                    </div>
                </div><!--end of 4thRowBody-->
            
 
                
                         
            </div> <!--end of contentBody-->
            
            <div class="col-md-1" > <!--space filler-->    
                           
            </div>   <!--right-->
        </div> <!--end of rowBody-->
        <!--------------------------------------------------------------------------------------------------------------------------------------------->
        <div class="searchCard"> <!--search card 1-->
            <div class="backFlex">
                <span onclick="subBacc()" class="Bacc">
                    <i class="fas fa-angle-left fa-3x"></i>
                </span>              
            </div>         
            <div class="searchContent">
                <form action="searchTSI.php" method="POST" autocomplete="off">                      
                    <p>Enter a certain topic or term for this subject, area or field</p>
                    <span id="subChange" class="searchLabel"></span>
                    <input id="dbCgTerm" type="text" name="" placeholder="What do you want to know?">                            
                    <div class="searchEmbed">                   
                        <input type="submit" id="cgButton" name="" value="Search" class="searchButton">                                                                           
                    </div>
                </form> 
            </div>
        </div>

                                                                                                                            <!--
                                                                                                                                <div class="row">
                                                                                                                                    <div id="theFooter" class="col-md">
                                                                                                                                        <h1>footer</h1>
                                                                                                                                    </div>
                                                                                                                                </div>end of rowFooter
                                                                                                                            -->
    </div> <!--end of main_can-->
    <script src="JavaScript/movement3.js"></script>
    
    <script>
        if (window.history.replaceState)
        {
            window.history.replaceState(null, null, window.location.href);
        }
        
    </script>
</body>
</html>