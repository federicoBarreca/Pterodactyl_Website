<?php
session_start();
include 'myPHP/funzioniphp.php';
?>

<!doctype html>

<html lang='it'>

<head>

  <title>Sfida</title>
  <meta name='titolo' content='sfida'>
  <meta name='username' content=<?php echo $_SESSION["username"]?>>
  <meta name='logged' content=<?php echo $_SESSION["logged"]?>>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="myCSS/style.css">
  <link rel="stylesheet" href="myCSS/sfida.css">
  <link rel="stylesheet" href="css/bootstrap-grid.css">

</head>

<body onload='createNavbar();createFootbar();Darkness();switchBtn();fadein();enter();changeNavbar("<?php echo $_SESSION["logged"]?>","<?php echo $_SESSION["username"]?>", "<?php echo getPropic($_SESSION["username"])?>");'>
<div class="fadeDiv">

<?php
  if($_SESSION["logged"]){
  echo "<div class='row' id='row'>
    
    <!--FORM PER LA PERSONALIZZAZIONE-->
    <div class='col-4'>
      <div class='container rounded' id='leftCont'>
        <h2 id='choice'>Scegli la tua sfida</h2>

        <div id='catCont'>
          <label><b>Categoria</b></label><br>
          <select id='categoria' name='categoria'>
            <option value='Italiano'>Italiano</option>
            <option value='Informatica'>Informatica</option>
            <option value='Complesse'>Parole Complesse</option>
          </select>
        </div>
        
        <div class='btn btn-primary' id='b' onclick='startStop(); caricaDocumento();'>START</div>
      </div>
    </div>

    <!--AREA DI SFIDA-->
    <div class='col-8 container text-center' id='rightCont'>

      <h4 id='timer'><label id='lbl'>Timer: <b><span id='time'>01:30</span></b> minutes!</label></h4>
      <p id='ni'></p>
      <br>
      <div class='container rounded border text-left' id='area'>

      </div>
      <br>
      <input type='text' id='player' size='60' >
    </div>
  </div>
  <div class='text-center'>
    <label id='downLbl'>
      Questa è la modalità sfida.<br> I risultati della sfida <b>verranno</b> 
      memorizzati all'interno della classifica,<br> in modo che tu possa partecipare alla competizione mondiale.
    </label>
  </div>";
  }
  else{
    echo "<h3><label id='alertLbl'>Per partecipare alle sfide <a href='signUp.html'>registrati</a> o effettua login</label></h3>";
  }

  ?>
</div>


<!--Spazio per gli script-->
  <script src="js/jquery.min.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <script src="myJS/funzioni.js" type="text/javascript"></script>
  <script src="myJS/playButtonSfida.js" type="text/javascript"></script>
  <script src="myJS/barre.js" type="text/javascript"></script>
  <script src="myJS/gameFunctions.js" type="text/javascript"></script>
</body>
</html>