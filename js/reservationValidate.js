function validateRess() {

    var fname = document.forms["reservationForm"]["fname"].value;
    var lname = document.forms["reservationForm"]["lname"].value;
    var email = document.forms["reservationForm"]["email"].value;
    var phone = document.forms["reservationForm"]["phone"].value;
    var regexEmail = /\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/;
    
    if (fname == "") {
        document.getElementById("demo1").innerHTML = "(Please enter first name)";
    }else{
        document.getElementById("demo1").innerHTML = "";
    }

    if (lname == "") {
        document.getElementById("demo2").innerHTML = "(Please enter last name)";
    }else{
        document.getElementById("demo2").innerHTML = "";
    }
    
     
    if (phone == "") {
        document.getElementById("demo3").innerHTML = "(Please enter phone number)";
    }else{
        document.getElementById("demo3").innerHTML = "";
    }
     

    if (email == "") {
        document.getElementById("demo4").innerHTML = "(Please enter email)";
    }else{
        document.getElementById("demo4").innerHTML = "";
    }

  }






