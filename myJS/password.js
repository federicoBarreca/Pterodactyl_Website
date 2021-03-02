//FUNZIONE PER IL CONTROLLARE IL MATCHING DELLE PASSWORD IN FASE DI REGISTRAZIONE

function checkPassword() {
    var password = $("#Password").val();
    var passwordConf = $("#confermaPassword").val();
     
    if (password != passwordConf) {
      $("#divCheckPw").html("La password non corrisponde!");
      document.getElementById("subBtn").disabled = true;
    }
    else {
      $("#divCheckPw").html("");
      document.getElementById("subBtn").disabled = false;
    }
  }