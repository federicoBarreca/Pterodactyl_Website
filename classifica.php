<?php
session_start();
include 'myPHP/funzioniphp.php';
?>
<!DOCTYPE html>

<html lang="it">

<head>

  <title>Classifica</title>
  <meta name="titolo" content="classifica">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="myCSS/style.css">
  <link rel="stylesheet" href="myCSS/classifica.css">
  <link rel="stylesheet" href="css/bootstrap-grid.css">

</head>

<body onload='createNavbar();createFootbar();Darkness();fadein();changeNavbar("<?php echo $_SESSION["logged"]?>","<?php echo $_SESSION["username"]?>", "<?php echo getPropic($_SESSION["username"])?>");printClass( "<?php echo  classificaUtente($_SESSION["username"],0,"Italiano") ?>","<?php echo classificaUtente($_SESSION["username"],1,"Italiano") ?>","<?php echo classificaUtente($_SESSION["username"],2,"Italiano") ?>","<?php echo classificaUtente($_SESSION["username"],0,"Informatica")?>","<?php echo classificaUtente($_SESSION["username"],1,"Informatica")?>","<?php echo classificaUtente($_SESSION["username"],2,"Informatica")?>","<?php echo classificaUtente($_SESSION["username"],0,"Complesse")?>",
        "<?php echo classificaUtente($_SESSION["username"],1,"Complesse")?>","<?php echo classificaUtente($_SESSION["username"],2,"Complesse")?>",getCat() );
        printClassTot( "<?php echo  classifica(0,"Italiano") ?>","<?php echo classifica(1,"Italiano") ?>","<?php echo classifica(2,"Italiano") ?>","<?php echo classifica(0,"Informatica")?>",
        "<?php echo classifica(1,"Informatica")?>","<?php echo classifica(2,"Informatica")?>","<?php echo classifica(0,"Complesse")?>","<?php echo classifica(1,"Complesse")?>","<?php echo classifica(2,"Complesse")?>",getCat() );'>

<div class="fadeDiv">
  <div class="text-center" id="topCont">
  <label class="bold">Categoria:</label>
        <select id="categoria" name="categoria" onchange='printClass( "<?php echo  classificaUtente($_SESSION["username"],0,"Italiano") ?>","<?php echo classificaUtente($_SESSION["username"],1,"Italiano") ?>","<?php echo classificaUtente($_SESSION["username"],2,"Italiano") ?>","<?php echo classificaUtente($_SESSION["username"],0,"Informatica")?>","<?php echo classificaUtente($_SESSION["username"],1,"Informatica")?>","<?php echo classificaUtente($_SESSION["username"],2,"Informatica")?>","<?php echo classificaUtente($_SESSION["username"],0,"Complesse")?>",
        "<?php echo classificaUtente($_SESSION["username"],1,"Complesse")?>","<?php echo classificaUtente($_SESSION["username"],2,"Complesse")?>",getCat() );
        printClassTot( "<?php echo  classifica(0,"Italiano") ?>","<?php echo classifica(1,"Italiano") ?>","<?php echo classifica(2,"Italiano") ?>","<?php echo classifica(0,"Informatica")?>",
        "<?php echo classifica(1,"Informatica")?>","<?php echo classifica(2,"Informatica")?>","<?php echo classifica(0,"Complesse")?>","<?php echo classifica(1,"Complesse")?>","<?php echo classifica(2,"Complesse")?>",getCat() );'>

            <option value="Italiano">Italiano</option>
            <option value="Informatica">Informatica</option>
            <option value="Complesse">Parole Complesse</option>
          </select>
  </div>
  <div class="container rounded border txt-center" id="area">
    <h4 id="tot">Classifica Totale</h4>
      La tua posizione attuale:
      <div class="row">

      <div class="col-sm text-center" id="leftCol">
        <span id="class0"></span>
        <p>Posizione</p>
        <span id="class3"></span>
      </div>
      
      <div class="col-sm text-center" id="middleCol">
        <span id="class1"></span>
        <p>Username</p>
        <span id="class4"></span>
      </div>

      <div class="col-sm text-center" id="rightCol">
        <span id="class2"></span>
        <p>Punti</p>
        <span id="class5"></span>
      </div>
    </div>
  </div>


<!--Spazio per gli script-->
  <script src="js/jquery.min.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script> 
  <script src="myJS/barre.js" type="text/javascript"></script>
  <script src="myJS/funzioni.js" type="text/javascript"></script>
</body>
</html>