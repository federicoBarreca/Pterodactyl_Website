<?php
session_start();
?>
<html>
    <head>
        <!--FUNZIONE PER L'AGGIORNAMENTO DEI VALORI INSERITI IN FASE D'ISCRIZIONE-->
    </head>
    <body>
        <?php

            $dbconn = pg_connect("host=localhost port=5432 dbname=Progetto user=postgres password=biar") or die('Could not connect: ' . pg_last_error());
            if(!(isset($_POST['subBtn']))){
                header("Location: ../index.php");
            }
            else{
                $username = $_SESSION["username"];
                $propic = $_POST['propic'];
                $nome = $_POST['nome'];
                $cognome = $_POST['cognome'];
                $eta = $_POST['eta'];
                $sesso = $_POST['sesso'];
                $password = $_POST['password'];
                if($nome!=""){
                    $q1="update profilo set nome = $1 where username = $2";
                    $data=pg_query_params($dbconn,$q1,array($nome,$username));

                }
                if($cognome!=""){
                    $q1="update profilo set cognome = $1 where username = $2";
                    $data=pg_query_params($dbconn,$q1,array($cognome,$username));

                }
                if($eta!=""){
                    $q1="update profilo set eta = $1 where username = $2";
                    $data=pg_query_params($dbconn,$q1,array($eta,$username));

                }
                if($sesso!=""){
                    $q1="update profilo set sesso = $1 where username = $2";
                    $data=pg_query_params($dbconn,$q1,array($sesso,$username));

                }
                if($password!=""){
                    $password = md5($_POST['password']);
                    $q1="update login set password = $1 where username = $2";
                    $data=pg_query_params($dbconn,$q1,array($password,$username));
                }
                if($propic!=""){
                    $q1="update profilo set propic = $1 where username = $2";
                    $data=pg_query_params($dbconn,$q1,array($propic,$username));
                }
                header("Location: ../account.php");
            }
        ?>
    </body>
</html>