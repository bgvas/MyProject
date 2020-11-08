
function passwordValidator(){
    var password = document.getElementById("password");
    
    if(password == "a"){
        document.getElementById("username").innerHTML = "Hello World";
    }
    else document.getElementById("username").innerHTML = "";
}

function errorLogin(){
    const url = window.location.search;
    if(url.includes("errorLogin")){
       document.getElementById("error").innerHTML = "Error Username or Password!!!";
    }
    if(url.includes("fetchProblem")){
        document.getElementById("error").innerHTML = "Error while fetching username and password!!!";
     }
}