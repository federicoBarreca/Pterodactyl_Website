<?php
session_start();
include 'myPHP/funzioniphp.php';
?>

<!DOCTYPE html>

<html lang="it">

<head>

  <title>Impostazioni Account</title>
  <meta name="titolo" content="account">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="myCSS/style.css">
  <link rel="stylesheet" href="css/bootstrap-grid.css">
  <link rel="stylesheet" href="myCSS/account.css">

</head>

<body onload='createNavbar();createFootbar();Darkness();fadein();changeNavbar("<?php echo $_SESSION["logged"]?>","<?php echo $_SESSION["username"]?>", "<?php echo getPropic($_SESSION["username"])?>");'>
  <div class="fadeDiv">
    <div class="row">

      <div class="col container text-left" id="leftCont">
        <h3><label id="topLbl">Impostazioni Account</label></h3>
        

        <div class="container rounded border" id="area">

          <div class="row">

            <div class="col container">
              <form class="form-check" action="myPHP/update.php" method="POST" name="FormAccount" onSubmit="">

                <img id="immagineProfilo" class="mb-4 img-circle" src="pictures/samplepropics/<?php echo getPropic($_SESSION["username"])?>" alt="avatar" width="100" height="100"/>

                <input type="hidden" name="propic" id="propic" value="">

                <div id="pics" class="dropdown"><a href="#" class="dropdown-toggle form-control" data-toggle="dropdown">
                    <b>Scegli un immagine</b><span class="caret"></span></a>
                  <ul class="dropdown-menu">

                    <p><li class="text-center">
                      <img id="nstandard.jpeg" class="mb-4 img-circle" src="pictures/samplepropics/nstandard.jpeg" alt="avatar" width="100" height="100" onclick='choosePic("nstandard.jpeg");' />
                    </li></p>

                    <p><li class="text-center">
                      <img id="n5.gif" class="mb-4 img-circle" src="pictures/samplepropics/n5.gif" alt="avatar" width="100" height="100" onclick='choosePic("n5.gif");' />
                    </li></p>
                    
                    <p><li class="text-center">
                      <img id="n2.jpeg" class="mb-4 img-circle" src="pictures/samplepropics/n2.jpeg" alt="avatar" width="100" height="100" onclick='choosePic("n2.jpeg");' />
                    </li></p>
                    
                    <li class="text-center">
                      <img id="n3.jpeg" class="mb-4 img-circle" src="pictures/samplepropics/n3.jpeg" alt="avatar" width="100" height="100" onclick='choosePic("n3.jpeg");' />
                    </li>
                  </ul>
                </div>

                <label>Nome</label>
                <input type="text" name="nome" class="form-control" placeholder="Facoltativo" maxlength="15"/>

                <label>Cognome</label>
                <input type="text" name="cognome" class="form-control" placeholder="Facoltativo" maxlength="15" />

                <label>Sesso</label>
                <select name="sesso" id="select">
                  <option></option>
                  <option value="Maschio">Maschio</option>
                  <option value="Femmina">Femmina</option>
                  <option value="Altro">Altro</option>
                </select>

                <label>Età</label>
                <input type="number" name="eta" min=1 max=150 maxlength="3">

                <label>Nuova Password</label>
                <input type="password" name="password" id="Password" class="form-control" placeholder="Almeno 8 caratteri" maxlength="15" onkeyup="checkPassword();"/>
                <label>Conferma Password</label>
                <input type="password" id="confermaPassword" class="form-control" maxlength="15" onkeyup="checkPassword();" />
                <div class="registrationFormAlert" id="divCheckPw"></div>

                <input name="subBtn" id="subBtn" type="submit" value="Salva">
                <input type="reset" value="Reset" onclick="checkPassword();">

              </form>
            </div>

            <div class="col container text-center" id="dataCont">
              <p id="firstDataLbl">I tuoi dati:</p>

              <p id="dataLbl"><label>Nome:</label>
              <?php echo getAttributo("nome",$_SESSION["username"]); ?>
              </p>

              <p id="dataLbl"><label>Cognome:</label>
              <?php echo getAttributo("cognome",$_SESSION["username"]); ?>
              </p>

              <p id="dataLbl"><label>Sesso:</label>
              <?php echo getAttributo("sesso",$_SESSION["username"]); ?>
              </p>

              <p id="dataLbl"><label>Età:</label>
              <?php echo getAttributo("eta",$_SESSION["username"]); ?>
              </p>
            </div>

          </div>

        </div>
      </div>

      <div class="col container text-center" id="rightCont">
        <img class="mb-4 img-circle" src="pictures/ingranaggi.png" alt="" />
      </div>

    </div>
  </div>


  <!--Spazio per gli script-->
  <script src="js/jquery.min.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <script src="myJS/funzioni.js" type="text/javascript"></script>
  <script src="myJS/barre.js" type="text/javascript"></script>
  <script src="myJS/password.js" type="text/javascript"></script>
</body>

</html>