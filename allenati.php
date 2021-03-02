<?php
session_start();
include 'myPHP/funzioniphp.php';
?>

<!DOCTYPE html>

<html lang="it">

<head>

  <title>Allenati</title>
  <meta name="titolo" content="allenati">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="myCSS/style.css">
  <link rel="stylesheet" href="css/bootstrap-grid.css">
  <link rel="stylesheet" href="myCSS/allenati.css">

</head>

<body onload='createNavbar();createFootbar();Darkness();enableTimer();enter();fadein();changeNavbar("<?php echo $_SESSION["logged"]?>","<?php echo $_SESSION["username"]?>", "<?php echo getPropic($_SESSION["username"])?>");'>
<div class="fadeDiv">
  <div class="row">
    
    <!--FORM PER LA PERSONALIZZAZIONE-->
    <div class="col-4">
      <div class="container rounded" id="leftCont">
        <h2>Personalizza l'allenamento</h2>

        <div id="catCont">
          <p id="catLbl">Categoria</p>
          <select id="categoria" name="categoria">
            <option value="Italiano">Italiano</option>
            <option value="Informatica">Informatica</option>
            <option value="Parole Complesse">Parole Complesse</option>
          </select>
        </div>

        <div id="typeCont">
          <p>Tipo di allenamento:</p>
          <input type="radio" name="tipo" id="allClassico" value="Allenamento classico" onchange="enableTimer();" checked>
            <label id="radioLbl">Allenamento classico</label>
          <input type="radio" name="tipo" id="allSfida" value="Allenamento sfida" onchange="enableTimer();">
            <label>Allenamento sfida</label>
        </div>
        <div class="btn btn-primary" id="b" onclick="startStop(); caricaDocumento(); words();">START</div>
      </div>
    </div>

    <!--AREA DI ALLENAMENTO-->
    <div class="col-8 container text-center" id="rightCont">

      <h4 id="timer"></h4>
      <div class="container rounded border text-left" id="area">
      </div>

      <input type="text" id="player" size="60">
    </div>
  </div>
  <div class="text-center">
    <label id="downLbl">
      Allenati finché vuoi!<br> I risultati degli allenamenti <b>non</b> vengono
      memorizzati all'interno della classifica, in modo che tu possa prepararti per le
      sfide.
    </label>
  </div>
</div>

<!--Spazio per gli script-->
  <script src="js/jquery.min.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <script src="myJS/funzioni.js" type="text/javascript"></script>
  <script src="myJS/playButton.js" type="text/javascript"></script>
  <script src="myJS/barre.js" type="text/javascript"></script>
  <script src="myJS/gameFunctions.js" type="text/javascript"></script>
</body>

</html>