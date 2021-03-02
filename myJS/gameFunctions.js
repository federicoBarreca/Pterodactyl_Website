//FUNZIONE PER IL CARICAMENTO DEI DOCUMENTI DI TESTO
function caricaDocumento(e) {
    if ($("#b").html() == "STOP" || getMeta("titolo") == "sfida") {
        var httpRequest = new XMLHttpRequest();
        httpRequest.onreadystatechange = gestisciResponse;
        switch ($("#categoria").val()) {
            case "Italiano":
                httpRequest.open("GET", "parole/Italiano.txt", true);
                nparole = 105;
                break;
            case "Informatica":
                httpRequest.open("GET", "parole/Informatica.txt", true);
                nparole = 101;
                break;
            default:
                httpRequest.open("GET", "parole/Complicate.txt", true);
                nparole = 101;
                break;
        }
        httpRequest.send();
        a = 0;
    }
}

//FUNZIONE PER LA GESTIONE DEI TESTI DA MOSTRARE IN GIOCO
function gestisciResponse(e) {
    if (e.target.readyState == XMLHttpRequest.DONE && e.target.status == 200) {
        var s = e.target.responseText;
        var stringhe = s.split("§");

        var r = Math.floor(Math.random() * nparole);

        supp = stringhe[r].substring(1);

        $("#player").val("");
        createArray();
        $("#area").html(printArray());
    }
}

//GESTIONE DEI TASTI DURANTE LA SESSIONE DI GIOCO
function enter() {
    var input = document.getElementById("player");
    input.addEventListener("keyup", function (event) {
        event.preventDefault();
        if (event.keyCode === 13) {
            checkCorrette();
            caricaDocumento();
        }
        else if (event.keyCode === 8) {
            if (a > 0) {
                changeArray("black", $("#player").val().length);
                a--;
                $("#area").html(printArray());
            }
        }
        else if (event.keyCode === 9 || event.keyCode === 16 || event.keyCode === 17 || event.keyCode === 20 || event.keyCode === 18 || event.keyCode === 37 ||
                event.keyCode === 38 || event.keyCode === 39 || event.keyCode === 40 || event.keyCode === 91 || event.keyCode === 92 || event.keyCode === 225) {

        }
        else {
            checkWord();
        }

    });
}

//-------------------------------------------------------

var supp = "";
var a = 0;
var nparole = 0;
var arr = new Array();

//CONTROLLO DI CORRETTEZZA DEI SINGOLI CARATTERI PER LA COLORAZIONE E LA STAMPA
function checkWord() {
    var input = $("#player").val();
    if (supp[a] == input[a]) {
        changeArray("green", a);
        $("#area").html(printArray());

    }
    else {
        changeArray("red", a);
        $("#area").html(printArray());
    }
    a++;
}

//STAMPA DELL'ARRAY DI CARATTERI NELL'AREA DI GIOCO
function printArray() {
    var s = "";
    for (var i = 0; i < supp.length; i++) {
        s += arr[i];
    }
    return s;
}

//FUNZIONE PER IL CAMBIO DI COLORE DEI CARATTERI NELL'ARRAY
function changeArray(colore, i) {
    arr[i] = "<span style='color: " + colore + "'>" + supp[i] + "</span>";
}

//FUNZIONE PER LA CREAZIONE DELL'ARRAY DI CARATTERI INIZIALE
function createArray() {
    for (var i = 0; i < supp.length; i++) {
        arr[i] = "<span style='color: black'>" + supp[i] + "</span>";
    }
}

paroleCorrette = 0;
stringaCorretta = 0;

//CONTROLLO DELLE PAROLE CORRETTE
function checkCorrette() {
    var inputSplit = $("#player").val().split(" ");
    var suppSplit = supp.split(" ");

    for (var i = 0; i < inputSplit.length; i++) {
        if (inputSplit[i] == suppSplit[i]) {
            paroleCorrette++;
            stringaCorretta += inputSplit[i].length;
        }
    }
}

//FUNZIONE LANCIATA AL GAMEOVER PER IL CALCOLO DEL PUNTEGGIO
function gameOver() {
    checkCorrette();

    var pc=paroleCorrette;
    var pcm = (paroleCorrette / 1.5).toFixed(2);
    var sc = stringaCorretta * 5;

    var d = new Date();
    var data = d.getDate() + "/" + d.getMonth() + "/" + d.getFullYear();
    if(getMeta('logged')){
        $.ajax({
            url:'myPHP/sendrecord.php',
            type:'POST',
            data:{username:getMeta('username'),punti:sc, parole:pc, puntiperminuto: pcm , categoria:$("#categoria").val(), date:data},
            success: function(data){console.log(data);}
        });
    }

    alert("Parole Corrette: " + pc + "\nParole/Minuto: " + pcm + "\nPunteggio: " + sc);

    paroleCorrette = 0;
    stringaCorretta = 0;

}