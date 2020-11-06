
function passwordValidator(){
    var password = document.getElementById("password");
    
    if(password == "a"){
        document.getElementById("username").innerHTML = "Hello World";
    }
    else document.getElementById("username").innerHTML = "";
}