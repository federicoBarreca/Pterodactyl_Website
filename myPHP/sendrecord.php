<!--FUNZIONE PER L'INVIO E SALVATAGGIO DEL PUNTEGGIO SUL SERVER-->

<?php

    $username = $_POST['username'];
    $punti = $_POST['punti'];
    $parole = $_POST['parole'];
    $puntiperminuto = $_POST['puntiperminuto'];
    $categoria = $_POST['categoria'];
    $data = $_POST['date'];
    $dbconn = pg_connect("host=localhost port=5432 dbname=Progetto user=postgres password=biar") or die('Could not connect: ' . pg_last_error());
    
    $q1="insert into record values ($1,$2,$3,$4,$5,$6)";
    $result=pg_query_params($dbconn, $q1, array($username,$punti,$parole,$puntiperminuto,$categoria,$data));
    
    switch ($categoria){
        case "Italiano":
            $q1="update profilo set Italiano =(select max(punti) from record where username=$1 and categoria=$2) where username=$1";
            $result=pg_query_params($dbconn, $q1, array($username,$categoria));
            break;
        case "Informatica":
            $q1="update profilo set Informatica =(select max(punti) from record where username=$1 and categoria=$2) where username=$1";
            $result=pg_query_params($dbconn, $q1, array($username,$categoria));
            break;
        default:
            $q1="update profilo set Complesse =(select max(punti) from record where username=$1 and categoria=$2) where username=$1";
            $result=pg_query_params($dbconn, $q1, array($username,$categoria));
            break;
    }

?>