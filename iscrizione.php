<?php
session_start();
include 'myPHP/funzioniphp.php';
?>

<!DOCTYPE html>

<html lang="it">

<head>

  <title>Iscrizione</title>
  <meta name="titolo" content="iscrizione">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="myCSS/style.css">
  <link rel="stylesheet" href="myCSS/iscrizione.css">
  <link rel="stylesheet" href="css/bootstrap-grid.css">
 
</head>

<body onload='createNavbar();createFootbar();Darkness();changeNavbar("<?php echo $_SESSION["logged"]?>","<?php echo $_SESSION["username"]?>", "<?php echo getPropic($_SESSION["username"])?>");'>
    <?php

        $dbconn = pg_connect("host=localhost port=5432 dbname=Progetto user=postgres password=biar") or die('Could not connect: ' . pg_last_error());
        if(!(isset($_POST['subBtn']))){
            header("Location: signUp.html");
        }
        else{
            $username = $_POST['username'];
            $email = $_POST['email'];
            $q1="select * from login where username=$1 or email=$2";
            $result=pg_query_params($dbconn, $q1, array($username, $email));
            if($row=pg_fetch_row($result)){
                if($row[0]==$username){
                    echo "<h1> <label id='lbl'>Username già utilizzato</label></h1>
                    <a href='signUp.html'> <label id='lbl'><u>Scegli un altro username</u></label></a>";
                }
                else{
                    echo "<h1> <label id='lbl' >Email già utilizzata</label></h1>
                    <a href='signUp.html'> <label id='lbl'><u>Scegli un altra email</u></label></a>";
                }
                
            }
            else{
                $nome=$_POST['nome'];
                $cognome = $_POST['cognome'];
                $eta = $_POST['eta'];
                if($eta=='')    $eta=null;
                $sesso = $_POST['sesso'];
                $propic = "nstandard.jpeg";
                $password = md5($_POST['password']);
                $q2="insert into profilo values ($1,$2,$3,$4,$5,$6,$7,$8,$9)";
                $q3 = "insert into login values ($1,$2,$3)";
                $data=pg_query_params($dbconn,$q2,array($username,null,null,null,$nome,$cognome,$eta,$sesso,$propic));
                $data2=pg_query_params($dbconn,$q3,array($username,$email,$password));

                if($data){
                    echo "<h1><label id='lbl' >Registrazione Completata! &nbsp;&nbsp;Effettua login per cominciare </label></h1>
                    <label id='lbl'> <a href=index.php><u>Premi qui</u> </a> per tornare alla home</label>";
                }
            }
        }

    ?>

<!--Spazio per gli script-->
  <script src="js/jquery.min.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <script src="myJS/funzioni.js" type="text/javascript"></script>
  <script src="myJS/barre.js" type="text/javascript"></script>
  <script src="myJS/password.js" type="text/javascript"></script>
</body>

</html>