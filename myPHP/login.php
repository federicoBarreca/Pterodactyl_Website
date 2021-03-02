<?php
session_start();
?>
<html>
    <head></head>
    <body>
        <?php

            $dbconn = pg_connect("host=localhost port=5432 dbname=Progetto user=postgres password=biar") or die('Could not connect: ' . pg_last_error());
            if(!(isset($_POST['loginBtn']))){
                header("Location: ../index.php");
            }
            else{
                $username = $_POST['username'];
                $password = $_POST['password'];
                $q1="select username from login where username=$1 and password=$2";
                $result=pg_query_params($dbconn,$q1,array($username,md5($password)));
                if($line=pg_fetch_array($result,null,PGSQL_ASSOC)){
                   
                    // Set session variables
                    $_SESSION["username"] = $username;
                    $_SESSION["logged"] = true;
                    
                    header("Location: ../index.php");
                }
                else{
                    header("Location: ../index.php");
                } 
            }
        ?>
    </body>
</html>