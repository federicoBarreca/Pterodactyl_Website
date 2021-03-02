//FUNZIONE PER LA GESTIONE DEL PULSANTE START
function switchBtn() {
    if (started) {
        $("#b").attr("style", "display:none");
        $("#categoria").attr("disabled", true);
    }
    else {
        $("#b").attr("style", "background-color:green");
        $("#categoria").attr("disabled", false);
    }
}

var started = false;

//FUNZIONE PER LA GESTIONE DELLA SESSIONE DI GIOCO (START)
function startStop() {
    //Mette in focus la barra di input
    $("#player").focus();
    //Resto della funzione

    started = true;
    switchBtn();
    startTimer();
}

var xtime=90;

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