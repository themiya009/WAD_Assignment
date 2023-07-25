function loginvalidate(){
    
    var username = document.forms["loginForm"]["username-input"];
    var pass = document.forms["loginForm"]["password-input"];

    if(username == "" || pass == ""){
        alert("USername or Password Cannot be Empty!");
        return false;
    }

}