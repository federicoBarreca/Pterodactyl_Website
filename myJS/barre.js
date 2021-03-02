//FUNZIONI PER LA CREAZIONE DINAMICA DELLA NAVBAR E DEL FOOTER (SIA PER UTENTE LOGGATO CHE PER UTENTE NON LOGGATO)

function createNavbar() {
    var n = document.createElement("nav");
    n.setAttribute('class', "navbar navbar-inverse navbar-fixed-top");

    var navbar = ['<div class="container-fluid">',
        '<div class="navbar-header" >',
        '<a id="linkindex" class="navbar-brand" href="index.php" style=" padding-top:13%; font-size:160%"><b><i>Pterodactyl</i></b></a>',
        '</div>',
        '<ul class="nav navbar-nav" style="padding-top:0.4%;">',
        '<li id="linkallenati"><a href="allenati.php" style="font-size:135%">Allenati</a></li>',
        '<li id="linksfida"><a href="sfida.php" style="font-size:135%">Sfida</a></li>',
        '<li id="linkchisiamo"><a href="chiSiamo.php" style="font-size:135%">Chi siamo</a></li>',

        '</ul>',
        '<ul class="nav navbar-nav navbar-right" style="padding-top:0.4%;">',
        '<li  id="login" class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" style="font-size:135%" id="dropHead">Login <span class="caret"></span></a>',
        '<ul id="dropItem" class="dropdown-menu">',
        '<li>',
        '<form action="myPHP/login.php" class="navbar-form" method="post">',
        '<label class="bold">Username</label>',
        '<input type="text" name="username" class="form-control" size="30" maxlength="30" required>',
        '<label class="bold" style="margin-top: 5px;">Password</label>',
        '<input type="password" name="password" class="form-control" size="30" maxlength="30" style="margin-bottom:2%" required>',
        '<input type="submit" name="loginBtn" class="form-control" value="Login" >',
        '</form>',
        '</li>',
        '</ul>',
        '</li>',
        '<li id="linksignup"><a href="signUp.html" style="font-size:135%">Iscriviti</a></li>',
        '</ul>',
        '</div>'].join("\n");

    n.innerHTML = navbar;
    document.body.appendChild(n);

    activeBtn();
}



function createFootbar() {
    var n = document.createElement("footer");
    n.setAttribute('class', "footer navbar-inverse");

    var footbar = ['<div class="container-fluid">',
        '<ul class="nav navbar-nav">',
        '<li><a id="madeby" style="font-size:120%">Made by Barreca F. & Verdecchi M.</a></li>',
        '</ul>',
        '<ul class="nav navbar-nav navbar-right">',
        '<li class="dropup"><a href="#" class="dropdown-toggle" data-toggle="dropdown" style="font-size:120%">Feedback <span class="caret"></span></a>',
        '<ul class="dropdown-menu">',
        '<li>',
        '<form action="/myPHP/insertFeedback.php" method="post" class="navbar-form">',
        '<textarea class="form-control" rows="5" name="commento" id="commento" maxlength="120" style="resize: none"; placeholder="Commento..." required></textarea>',
        '<br>',
        '<input name="sendFeedback" id="sendFeedback" class="form-control" type="submit" value="Invia" >',
        '</form>',
        '</li>',
        '</ul>',
        '</li>',
        '</ul>',
        '</div>'].join("\n");

    n.innerHTML = footbar;
    document.body.appendChild(n);
}

function changeNavbar(logged,username,propic){
    if(logged){
        p =  '<img id="immagineProfilo" class="mb-4 img-circle" src="pictures/samplepropics/'+propic+'" alt="avatar" width="30" height="30"/>';
        p+='&nbsp;&nbsp;<b>'+username+'</b><span class="caret"></span>';
        $("#dropHead").html(p);
        p = '<li id="linkprofilo"><a href="profilo.php" style="font-size:135%">Profilo</a></li>'
        p+= '<li id="linkaccount"><a href="account.php" style="font-size:135%">Account</a></li>'
        p+= '<li id="logout"><a href="myPHP/logout.php" style="font-size:135%"><b>Logout</b></a></li>'

        $("#dropItem").html(p);

        $("#linksignup").html("");
        $("#linksignup").attr("style","margin-right:100px");

        return true;
    }
    else return false;
}