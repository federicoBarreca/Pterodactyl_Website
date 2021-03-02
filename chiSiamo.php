<?php
session_start();
include 'myPHP/funzioniphp.php';
?>

<!doctype html>

<html lang="it">

<head>

  <title>chiSiamo</title>
  <meta name="titolo" content="chisiamo">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-grid.css">
  <link rel="stylesheet" href="myCSS/style.css">
  <link rel="stylesheet" href="myCSS/chiSiamo.css">

</head>

<body onload='createNavbar();createFootbar();Darkness();fadein();changeNavbar("<?php echo $_SESSION["logged"]?>","<?php echo $_SESSION["username"]?>", "<?php echo getPropic($_SESSION["username"])?>");'>
<div class="fadeDiv">

    <div class="text-center">
      <label id="topLbl">
        Questo sito è stato ideato e realizzato da:
      </label>
    </div>


    <div class="row">
    <div class="col text-center">
    <label>
      <p>Federico Barreca</p>
      fed97@live.it
    </label>
    </div>


    <div class="col text-center">
    <label>
      <p>Mattia Verdecchi</p>
      mattiaverdecchi@yahoo.it
      </label>
    </div>
    </div>


<div>
  
<!--Spazio per gli script-->
  <script src="js/jquery.min.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script> 
  <script src="myJS/funzioni.js" type="text/javascript"></script>
  <script src="myJS/barre.js" type="text/javascript"></script>
</body>

</html>