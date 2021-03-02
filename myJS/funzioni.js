//Restituisce l'attributo content del meta con name=metaName
function getMeta(metaName) {
  const metas = document.getElementsByTagName('meta');

  for (let i = 0; i < metas.length; i++) {
    if (metas[i].getAttribute('name') === metaName) {
      return metas[i].getAttribute('content');
    }
  }
  return '';
}

//Imposta content=true del meta con nome=metName
function setMeta(metaName, metaContent) {
  const metas = document.getElementsByTagName('meta');

  for (let i = 0; i < metas.length; i++) {
    if (metas[i].getAttribute('name') === metaName) {
      return metas[i].setAttribute('content', metaContent);
    }
  }
  return '';
}

//FUNZIONE DI SWITCH PER RENDERE ACTIVE I BOTTONI DELLA NAVBAR
function activeBtn() {
  switch (getMeta("titolo")) {
    case "chisiamo":
      document.getElementById("linkchisiamo").setAttribute("class", "active");
      break;
    case "allenati":
      document.getElementById("linkallenati").setAttribute("class", "active");
      break;
    case "sfida":
      document.getElementById("linksfida").setAttribute("class", "active");
      break;
    case "signup":
      document.getElementById("linksignup").setAttribute("class", "active");
      break;
    default:
      return "";
  }
}

//FUNZIONE PER L'APPLICAZIONE DEL TEMA SCURO
function Darkness() {
  var data = new Date();
  var hh = data.getHours();
  if (hh > 16 || hh < 6) {
    var x = document.getElementsByTagName("body");
    x[0].setAttribute("style", "background-image: url('pictures/bgd.jpg')");
  }
  else {
    var x = document.getElementsByTagName("body");
    x[0].setAttribute("style", "background-image: url('pictures/bg.jpg')");
  }
  window.setTimeout("Darkness()", 3000);
}

//FUNZIONE PER LA SCELTA DELL'IMMAGINE DI PROFILO
function choosePic(id) {
  switch (id) {
    case "n5.gif":
      document.getElementById("immagineProfilo").setAttribute("src", "pictures/samplepropics/n5.gif");
      $("#propic").val(id);
      break;
    case "n2.jpeg":
      document.getElementById("immagineProfilo").setAttribute("src", "pictures/samplepropics/n2.jpeg");
      $("#propic").val(id);
      break;
    case "n3.jpeg":
      document.getElementById("immagineProfilo").setAttribute("src", "pictures/samplepropics/n3.jpeg");
      $("#propic").val(id);
      break;
    case "nstandard.jpeg":
      document.getElementById("immagineProfilo").setAttribute("src", "pictures/samplepropics/nstandard.jpeg");
      $("#propic").val(id);
      break;
    default:
      return "";
  }
}

//easter egg
function ven() {
  if ($("#username").val().toLowerCase() == "ven" || $("#username").val().toLowerCase() == "~ven~" || $("#username").val().toUpperCase() == "BLACKICON97") window.alert("Chi ti credi, Il creatore?")
}

//GETTER PER LA CATEGORIA
function getCat(){
  return $("#categoria").val();
}

//
function printClass(n0,n1,n2,n3,n4,n5,n6,n7,n8,cat){
  switch (cat){
    case "Italiano":
      $("#class0").html(n0);
      $("#class1").html(n1);
      $("#class2").html(n2);
      break;
    case "Informatica":
      $("#class0").html(n3);
      $("#class1").html(n4);
      $("#class2").html(n5);
      break;
    default:
      $("#class0").html(n6);
      $("#class1").html(n7);
      $("#class2").html(n8);
      break;
  }
}

//FUNZIONE DI STAMPA DELLA CLASSIFICA TOTALE
function printClassTot(n0,n1,n2,n3,n4,n5,n6,n7,n8,cat){
  switch (cat){
    case "Italiano":
      $("#class3").html(n0);
      $("#class4").html(n1);
      $("#class5").html(n2);
      break;
    case "Informatica":
      $("#class3").html(n3);
      $("#class4").html(n4);
      $("#class5").html(n5);
      break;
    default:
      $("#class3").html(n6);
      $("#class4").html(n7);
      $("#class5").html(n8);
      break;
  }
}

//EFFETTO FADIN PER LE PAGINE
function fadein(){
  $(document).ready(function(){
  $(".fadeDiv").fadeIn(1000);
});
}