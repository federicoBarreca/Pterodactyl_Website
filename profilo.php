<?php
session_start();
include 'myPHP/funzioniphp.php';
?>

<!DOCTYPE html>

<html lang="it">

<head>

  <title>Profilo</title>
  <meta name="titolo" content="profilo">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="myCSS/style.css">
  <link rel="stylesheet" href="myCSS/profilo.css">
  <link rel="stylesheet" href="css/bootstrap-grid.min.css">

</head>

<body onload='createNavbar();createFootbar();Darkness();fadein();changeNavbar("<?php echo $_SESSION["logged"]?>","<?php echo $_SESSION["username"]?>", "<?php echo getPropic($_SESSION["username"])?>");printClass( "<?php echo  classificaUtente($_SESSION["username"],0,"Italiano") ?>","<?php echo classificaUtente($_SESSION["username"],1,"Italiano") ?>","<?php echo classificaUtente($_SESSION["username"],2,"Italiano") ?>","<?php echo classificaUtente($_SESSION["username"],0,"Informatica")?>","<?php echo classificaUtente($_SESSION["username"],1,"Informatica")?>","<?php echo classificaUtente($_SESSION["username"],2,"Informatica")?>","<?php echo classificaUtente($_SESSION["username"],0,"Complesse")?>","<?php echo classificaUtente($_SESSION["username"],1,"Complesse")?>","<?php echo classificaUtente($_SESSION["username"],2,"Complesse")?>",getCat() );'>
<div class="fadeDiv">
<!--CATEGORIA-->
<div class="text-center" id="topCont">  
        <label id="catLbl">Categoria:</label>
        <select name="categoria" id="categoria" onchange='printClass( "<?php echo  classificaUtente($_SESSION["username"],0,"Italiano") ?>","<?php echo classificaUtente($_SESSION["username"],1,"Italiano") ?>","<?php echo classificaUtente($_SESSION["username"],2,"Italiano") ?>","<?php echo classificaUtente($_SESSION["username"],0,"Informatica")?>","<?php echo classificaUtente($_SESSION["username"],1,"Informatica")?>","<?php echo classificaUtente($_SESSION["username"],2,"Informatica")?>","<?php echo classificaUtente($_SESSION["username"],0,"Complesse")?>","<?php echo classificaUtente($_SESSION["username"],1,"Complesse")?>","<?php echo classificaUtente($_SESSION["username"],2,"Complesse")?>",getCat() );'>
          <option value="Italiano">Italiano</option>
          <option value="Informatica">Informatica</option>
          <option value="Complesse">Parole Complesse</option>
        </select>
</div>

<!--POSIZIONE ATTUALE-->
<div class="container rounded border txt-center" id="area1">
  <div class="row">
    <div class="col-3 text-center">
      <p>Posizione</p>
      <span id="class0"></span>
    </div>
    <div class="col-3 text-center">
      <p>Username</p>
      <span id="class1"></span>
    </div>
    <div class="col-3 text-center">
      <p>Punti</p>
      <span id="class2"></span>
    </div>
    <div class="col-3 text-center">
      <a href="classifica.php"><button class="btn" id="totBtn">
      <b>Vai alla <br>Classifica Totale</b></button>
      </a>
    </div>
  </div>
</div>

<!--LEGENDA-->
<div class="text-center" id="centerBox">
  <label id="lbl">
    <b>I tuoi record: &nbsp;</b><br>( punti, &nbsp;parole corrette, &nbsp;parole/minuto, &nbsp;data )
  </label>
</div>

<!--RECORD-->
<div class="container rounded border txt-center" id="area2">
  <div class="row">
    <?php printRecord($_SESSION["username"]);?>
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