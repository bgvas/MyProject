<!DOCTYPE html>
<title>DashBoard</title>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<meta name="description" content="My Project from www univercity class" >
<meta name="author" content="Vasileios Georgoulas">
<meta name="keywords" content="HTML,CSS,JavaScript, PHP">
<link rel="stylesheet" href="Style.css">
<script src="MyJavaScriptFile.js"></script>
</head>

<body>
    <div>
        <?php
            $username = $_POST["username"];
            $password = $_POST["password"];
            if($username == null || $password == null){
               header("Location:Login.html?result=fetchProblem");
            }
            
            
        ?> 
    </div>

</body>
</html>