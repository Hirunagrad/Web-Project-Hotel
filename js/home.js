//for auto hide nav bar 
var prevScrollpos = window.pageYOffset;

window.onscroll = function(){

    var currentScrollPos = window.pageYOffset;

    if (prevScrollpos > currentScrollPos){

        document.getElementById("navDiv").style.top = "0";

    }
    else{

        document.getElementById("navDiv").style.top = "-75px";
    }

    prevScrollpos = currentScrollPos;
}





var counter = 1;
setInterval(function(){
  document.getElementById('radio' + counter).checked = true;
  counter++;
  if(counter > 4){
    counter = 1;
  }
}, 5000);














