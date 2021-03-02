create table Login(
    username varchar(30) primary key,
    email varchar(40),
    password varchar(100)
);

create table Profilo(
    username varchar(30) primary key,
    Italiano integer,
    Informatica integer,
    Complesse integer,
    nome varchar(15),
    cognome varchar(15),
    eta numeric,
    sesso varchar(10),
    propic varchar(20)
);

create table Record(
    username varchar(30),
    punti integer,
    parole integer,
    puntiperminuto numeric,
    categoria varchar(20),
    data varchar(20)
);

create table Feedback(
    commento varchar(200)
);