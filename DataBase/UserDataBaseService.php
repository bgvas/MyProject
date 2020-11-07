<?php
    include 'Connect.php';

        
    function CheckUser($username, $password){
        $connect = ConnectToDb();
        $sql = "Select * from user";// where password = $password and username = $username";
        if($result = mysqli_query($connect, $sql)){
            while($row = mysqli_fetch_array($result)){
                if($username == $row['username'] && $password == $row['password']){
                    return true;
               }
               else return false;
            }
        }
        else echo "Error while Fetching data from Database";

        DisconnetFromDB($connect);
    }

?>