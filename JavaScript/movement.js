/*for Sidebar and Menu button*/
const theMenuBtn = document.querySelector('.theMenu');
let theMenu = true;
var sideBar = document.getElementsByClassName("theSidebar")[0];

    theMenuBtn.addEventListener('click', ()=>
    {
        if (theMenu == true)
        {
            theMenuBtn.classList.add('open');
            theMenu = false;
            sideBar.style.width="210px";
            document.getElementById('saydBar').classList.toggle('active');
        }

        else
        {
            theMenuBtn.classList.remove('open');
            theMenu = true;
            document.getElementsByClassName('theSidebar')[0].style.width="0px";
            document.getElementById('saydBar').classList.remove('active');
        }
    });


    
    

/*------------------------------------------------------------------*/

/* for Sliding in every subject that has been specifically clicked */
const eng = document.getElementById("bEnglish");
const sci = document.getElementById("bScience");
const mat = document.getElementById("bMath");
const pE = document.getElementById("bPE");
const accnt = document.getElementById("bAccnt");
const poli = document.getElementById("bPol");
const hist = document.getElementById("bHist");
const tech = document.getElementById("bTech");

var sC = document.getElementById("subChange");
var dbCt = document.getElementById("dbCgTerm");
var cgButton = document.getElementById("cgButton");

eng.addEventListener('click', ()=>{                  
    sC.innerHTML = "ENGLISH";
    dbCt.name =  "dbEngTerm";
    cgButton.name ="eng";
});

sci.addEventListener('click', ()=>{
    sC.innerHTML = "SCIENCE";
    dbCt.name =  "dbSciTerm";
    cgButton.name ="sci";
});

mat.addEventListener('click', ()=>{
    sC.innerHTML = "MATHEMATICS";
    dbCt.name =  "dbMathTerm";
    cgButton.name ="math";
});

pE.addEventListener('click',()=>{
    sC.innerHTML = "PHYSICAL EDUCATION";
    dbCt.name =  "dbPETerm";
    cgButton.name ="pe";
});

accnt.addEventListener('click', ()=>{
    sC.innerHTML = "ACCOUNTING";
    dbCt.name =  "dbAccntTerm";
    cgButton.name ="accnt";
});

poli.addEventListener('click', ()=>{
    sC.innerHTML = "POLITICS";
    dbCt.name =  "dbPolTerm";
    cgButton.name ="poli";
});

hist.addEventListener('click', ()=>{
    sC.innerHTML = "HISTORY";
    dbCt.name =  "dbHistTerm";
    cgButton.name ="hist";
});

tech.addEventListener('click', ()=> {
    sC.innerHTML = "TECHNOLOGY";
    dbCt.name =  "dbTechTerm";
    cgButton.name ="tech";
});


function Slide()
{
    var Card = document.getElementsByClassName("searchCard")[0];
    var Content = document.getElementsByClassName("searchContent")[0];
    var back = document.getElementsByClassName("backFlex")[0];
    var SubBody = document.getElementById("theSubBody");

    SubBody.style.transition = ".5s";
    SubBody.style.transform = "scale(0.0)";
    SubBody.style.visibility = "hidden";
    Card.style.visibility = "visible";
    Content.style.transform = "translateX(0px)";
    back.style.transform = "translateX(0px)";    
}

function subBacc()
{
    var Card = document.getElementsByClassName("searchCard")[0];
    var Content = document.getElementsByClassName("searchContent")[0];
    var back = document.getElementsByClassName("backFlex")[0];
    var SubBody = document.getElementById("theSubBody");
    var change = document.getElementById("subChange");
    var changeTerm = document.getElementById("dbCgTerm");
    var cgBtn = document.getElementById("cgButton");

    change.innerHTML = "";
    changeTerm.name = "";
    cgBtn.name = "";
    
    
    SubBody.style.transition = ".5s";
    SubBody.style.transform = "scale(1.0)";
    SubBody.style.visibility = "visible";
    Card.style.visibility = "hidden";
    Content.style.transform = "translateX(1500px)";
    back.style.transform = "translateX(1500px)";  
}


/*------------------------------------------------------------------*/



function toggleThisLog()
{
    var mCan = document.getElementsByClassName("main_can")[0];
    document.getElementById("theLogin").classList.toggle("active");
    document.getElementById("logTarg").classList.toggle("active");
    mCan.style.opacity="30%";
    mCan.style.pointerEvents = "none";        
}

function toggleOutLog()
{
    var mCan = document.getElementsByClassName("main_can")[0];
    document.getElementById("theLogin").classList.remove("active");
    document.getElementById("logTarg").classList.remove("active");

    mCan.style.opacity="100%";
    mCan.style.pointerEvents = "auto";        
}

function wContCg()
{
    var wTar = document.getElementById("wizTarg");
    var wCont = document.getElementById("wizCont");
    var wbolding = document.getElementById("wBold");
    wTar.style.border = "solid #086788 2px";
    wTar.style.boxShadow = "0px 1px 4px 1px #086788";
    wTar.style.transform = "scale(1.1)";
    wCont.style.color = "#086788";
    wbolding.style.color = "#086788";
    wbolding.style.transition = ".5s";
    
}

function wContCgOut()
{
    var wTar = document.getElementById("wizTarg");
    var wCont = document.getElementById("wizCont");
    var wbolding = document.getElementById("wBold");
    wTar.style.border = "solid #505050 2px";
    wTar.style.boxShadow = "0px 1px 4px 1px #808080";
    wTar.style.transform = "scale(1.0)";
    wCont.style.color = "#505050";
    wbolding.style.color = "#505050";
    wbolding.style.transition = ".5s";
}

function sContCg()
{
    var sTar = document.getElementById("stuTarg");
    var sCont = document.getElementById("stuCont");
    var bolding = document.getElementById("sBold");
    sTar.style.border = "solid #086788 2px";
    sTar.style.boxShadow = "0px 1px 4px 1px #086788";
    sTar.style.transform = "scale(1.1)";
    sCont.style.color = "#086788";
    bolding.style.color = "#086788";
    bolding.style.transition = ".5s";
}

function sContCgOut()
{
    var sTar = document.getElementById("stuTarg");
    var sCont = document.getElementById("stuCont");
    var bolding = document.getElementById("sBold");
    sTar.style.border = "solid #505050 2px";
    sTar.style.boxShadow = "0px 1px 4px 1px #808080";
    sTar.style.transform = "scale(1.0)";
    sCont.style.color = "#505050";
    bolding.style.color ="#505050";
    bolding.style.transition = ".5s";
}

function toggleThisReg()
{    
    var mCan = document.getElementsByClassName("main_can")[0];
    var theRegist = document.getElementById("theRegistration");

    document.getElementById("theRegistration").classList.toggle("active"); 
    document.getElementById("wizTarg").classList.toggle("active");
    document.getElementById("stuTarg").classList.toggle("active");    
    
    mCan.style.opacity = "30%";
    mCan.style.pointerEvents = "none";
    theRegist.style.opacity = "100%";

}

function toggleOutReg()
{
    var mCan = document.getElementsByClassName("main_can")[0];
    var theRegist = document.getElementById("theRegistration");

    document.getElementById("theRegistration").classList.remove("active"); 
    document.getElementById("wizTarg").classList.remove("active");
    document.getElementById("stuTarg").classList.remove("active");  

    mCan.style.opacity = "100%";
    mCan.style.pointerEvents = "auto";
    theRegist.style.opacity = "0%"; 
}



/*const theMenuBtn = document.querySelector('.theMenu');

let openTheMenu = true; // Variable to allow condition in the code only

theMenuBtn.addEventListener('click',()=>
    {
        if(openTheMenu == true)
        {
            theMenuBtn.classList.add('open');
            openTheMenu = false; // to pass in else condition
            document.getElementsByClassName('theSidebar')[0].style.width="190px";
            document.getElementsByClassName('theSidebar')[0].style.marginRight="50px";
        }
        else
        {
            theMenuBtn.classList.remove('open');
            openTheMenu = true; // to pass in if condition
            document.getElementsByClassName('theSidebar')[0].style.width="0px";
            document.getElementsByClassName('theSidebar')[0].style.marginRight="0px";
        }
    }
);*/

/*
const theRegisterBtn = document.querySelector('.register');
let registButton = true;

theRegisterBtn.addEventListener('click',()=>
{    
    if (registButton == true)
    {
        theRegisterBtn.classList.add('open');
        registButton = false;
        document.getElementsByClassName('theRegistration').style.opacity="100";
    }
    else
    {
        theRegisterBtn.classList.remove('open');
        registButton = true;
    }

        var theBody = document.getElementsByTagName("body")[0];
    var theRegistration = document.getElementById("theRegistration");
    document.getElementById("theRegistration").classList.toggle("active"); 
    theBody.style.opacity = "50%";
    theRegistration.style.opacity = "100%";
});
*/

