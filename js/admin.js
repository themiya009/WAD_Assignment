function adminlog(){

    
    var usrname = document.getElementById("usrname");
    var pass = document.getElementById("pass");
    
    if(usrname == "admin" && pass == "admin"){
        alert("Password Correct");
    } else {
        alert("check Credentials");
    }
}

