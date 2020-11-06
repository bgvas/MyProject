function passwordValidator(){
    var password = document.getElementById("password").nodeValue;
    if(password == "a"){
        document.getElementById("username").innerHTML = "Hello World";
    }
    else document.getElementById("username").innerHTML = "";
}