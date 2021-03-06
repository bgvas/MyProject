<?php 
    include 'Authenticator.php';
    include 'DataBase/UserDataBaseService.php';
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    if(!isset($_SESSION["session"])){        
        if(!CheckUser($username, $password)){
            header("Location: Authorization/Login.html?result=errorlogin");
            exit;
        }
        $userId = GetUserIdByUsernameAndPassword($username, $password);
        if($userId <= 0){
            header("Location: Authorization/Login.html?result=usernotfound");
            exit;
        }
    }
    $token = GenerateToken($userId);
    $_SESSION["token"] = $token;
?>

<!DOCTYPE html>
<html>
    <title>DashBoard</title>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <meta name="description" content="My Project, for www univercity class" >
        <meta name="author" content="Vasileios Georgoulas">
        <meta name="keywords" content="HTML,CSS,JavaScript, PHP">
        <link rel="stylesheet" href="./style.css">
        <script src="./MyJavaScriptFile.js"></script>
    </head>

<body>
    <header class="header">Medical Agenda</header>
    <div class="bigTitle">
        <div class="sidebar">
            <a href="#" class="active">Home</a>
            <a href="#">Alpha</a>
            <a href="#">Beta</a>
        </div>
        <div class = "container">
            <div class="column">Left</div>
            <div class="column">Right</div>
        </div>
    </div>
</body>
</html>