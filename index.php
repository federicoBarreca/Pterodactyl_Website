<?php
session_start();
include 'myPHP/funzioniphp.php';
?>

<?php
if(sizeof($_SESSION)<2){
  $_SESSION["username"]=false; 
  $_SESSION["logged"]=false;
}
?>  

<!DOCTYPE html>

<html lang="it">

<head>

  <title>Pterodactyl</title>
  <meta name="titolo" content="index">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="myCSS/style.css">
  <link rel="stylesheet" href="css/bootstrap-grid.css">
  <link rel="stylesheet" href="myCSS/index.css">
  
</head>

<body onload='createNavbar();createFootbar();Darkness();fadein();changeNavbar("<?php echo $_SESSION["logged"]?>","<?php echo $_SESSION["username"]?>", "<?php echo getPropic($_SESSION["username"])?>");
printClass("<?php echo  classificaTop10(0,"Italiano") ?>","<?php echo classificaTop10(1,"Italiano") ?>","<?php echo classificaTop10(2,"Italiano") ?>","<?php echo classificaTop10(0,"Informatica")?>",
"<?php echo classificaTop10(1,"Informatica")?>","<?php echo classificaTop10(2,"Informatica")?>","<?php echo classificaTop10(0,"Complesse")?>","<?php echo classificaTop10(1,"Complesse")?>","<?php echo classificaTop10(2,"Complesse")?>",getCat());'>

<div class="fadeDiv">
  <!--Zona Sinistra-->
  <div class="row">
    <div class="col-sm container text-center img-circle border" id="imgCont">
      <img id="n3" class="mb-4" src="pictures/logo.png" alt="LOGO!!!">
    </div>

  <!--Zona Centrale-->
    <div class="col-sm text-center">
      <button class="btn" onclick="window.location.href = 'allenati.php'">
      <b>PROVA<br>SUBITO!!!</b></button>
    </div>
    
  <!--Zona Destra-->
    <div class="col-sm text-center container rounded border" id="area">
        <h4><b>Classifica Top 10</b></h4>

        <label class="bold">Categoria:</label>
          <select name="categoria" id="categoria" onchange='printClass( "<?php echo  classificaTop10(0,"Italiano") ?>","<?php echo classificaTop10(1,"Italiano") ?>","<?php echo classificaTop10(2,"Italiano") ?>","<?php echo classificaTop10(0,"Informatica")?>",
"<?php echo classificaTop10(1,"Informatica")?>","<?php echo classificaTop10(2,"Informatica")?>","<?php echo classificaTop10(0,"Complesse")?>","<?php echo classificaTop10(1,"Complesse")?>","<?php echo classificaTop10(2,"Complesse")?>",getCat() );'>
            
            <option value="Italiano">Italiano</option>
            <option value="Informatica">Informatica</option>
            <option value="Complesse">Parole Complesse</option>
          </select>

  <!--SCRITTA IN FONDO-->
    <div class="row">
        <div class="col-sm text-center" id="sideInfo">
          <p><b><u>Posizione</u></b></p>
          <span id="class0"></span>
        </div>
        <div class="col-sm text-center" id="sideInfo">
          <p><b><u>Username</u></b></p>
          <span id="class1"></span>
        </div>
        <div class="col-sm text-center" id="sideInfo">
          <p><b><u>Punti</u></b></p>
          <span id="class2"></span>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center" id="under">
    <label id="btmLbl">
      Benvenuto su Pterodactyl !<br>
      Qui potrai esercitarti nel touch typing,<br>
      migliorare la tua precisione, la velocità e diventare più produttivo!
    </label>
  <div>
</div>

<!--Spazio per gli script-->
  <script src="js/jquery.min.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <script src="myJS/funzioni.js" type="text/javascript"></script>
  <script src="myJS/barre.js" type="text/javascript"></script>
</body>
</html>
