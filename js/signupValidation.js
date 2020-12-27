function validateSignup() {

    var fname = document.forms["signup"]["fname"].value;
    var lname = document.forms["signup"]["lname"].value;
    var email = document.forms["signup"]["email"].value;
    var pwd = document.forms["signup"]["pwd"].value;
    
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
    

    if (email == "") {
        document.getElementById("demo3").innerHTML = "(Please enter valid email)";
    }else{
        document.getElementById("demo3").innerHTML = "";
    }
     
    if (pwd == "") {
        document.getElementById("demo4").innerHTML = "(Please enter password)";
    }else{
        document.getElementById("demo4").innerHTML = "";
    }
     


  }

