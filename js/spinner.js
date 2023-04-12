var transformCat = function (){
    //	var startTimer = Date.now();
    //	var endTimer = startTimer+900000;
    //if(startTimer<endTimer){
    document.getElementById("userAsCat").style.display="block";
    document.getElementById("becomeCat").style.display="none"
    setTimeout(function(){	document.getElementById("userAsCat").style.display="none";
    document.getElementById("becomeCat").style.display="block"},200);
    };
    //}else{document.getElementById("userAsCat").style.display="none";}