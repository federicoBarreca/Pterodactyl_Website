//FUNZIONE PER L'ABILITAZIONE DEL TIMER IN CASO DI ALLENAMENTO SFIDA
function enableTimer() {
  if ($("#allClassico").prop("checked")) {
    $("#timer").html("");
  }
  else if ($("#allSfida").prop("checked")) {
    $("#timer").html("<label id='lbl'>Timer: <b><span id='time'>01:30</span></b> minutes!</label>");
  }
}

//SWITCH PER IL BOTTONE START/STOP E ATTRIBUTI DELL'ALLENAMENTO
function switchBtn() {
  if (started) {
    document.getElementById("b").innerHTML = "STOP";
    document.getElementById("b").style.backgroundColor= "red";
    $("#allSfida").attr("disabled", true);
    $("#allClassico").attr("disabled", true);
    $("#categoria").attr("disabled", true);
  }
  else {
    document.getElementById("b").innerHTML = "START";
    document.getElementById("b").style.backgroundColor= "green";
    $("#allSfida").attr("disabled", false);
    $("#allClassico").attr("disabled", false);
    $("#categoria").attr("disabled", false);
  }
}

var started = false;

//FUNZIONE DI GESTIONE DELLA SESSIONE DI GIOCO (INIZIO/FINE)
function startStop() {
  //Mette in focus la barra di input
  $("#player").focus();
  //Resto della funzione
  if (started) {
    if ($("#allSfida").prop("checked")) {
      xtime = -1;
      started = false;
    }
    else{
      started=false;
      xtime=90;
    }
    switchBtn();
  }
  else {
    started = true;
    switchBtn();
    if ($("#allSfida").prop("checked")) {
      startTimer();
    }
  }
}

var xtime = 90;

//FUNZIONE DI GESTIONE DEL TIMER
function startTimer() {

  var timer = xtime, minutes, seconds;
  minutes = parseInt(timer / 60, 10);
  seconds = parseInt(timer % 60, 10);

  minutes = minutes < 10 ? "0" + minutes : minutes;
  seconds = seconds < 10 ? "0" + seconds : seconds;

  var ora = minutes + ":" + seconds;
  xtime--;
  if (timer < 0) {
    gameOver();
    xtime = 90;
    document.getElementById("time").innerText = "01:30";
    started = false;
    switchBtn();
    return true;
  }
  else {
    document.getElementById("time").innerText = ora;
    window.setTimeout("startTimer()", 1000);
  }

}