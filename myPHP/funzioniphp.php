<?php
function getPropic($username){
  if($username!=false){
  $dbconn = pg_connect("host=localhost port=5432 dbname=Progetto user=postgres password=biar") 
  or die('Could not connect: ' . pg_last_error());
  $q1= "select propic from profilo where username=$1";
  $result=pg_query_params($dbconn,$q1,array($username));
  if($row=pg_fetch_row($result)){
    return $row[0];
  }
  else return "";
}
else return false;

}

function classificaTop10($n, $cat){
  $dbconn = pg_connect("host=localhost port=5432 dbname=Progetto user=postgres password=biar") 
  or die('Could not connect: ' . pg_last_error());
  $posizione=0;
  $q1= "select username, $cat from profilo where $cat is not null order by $cat desc limit 10";
  $result=pg_query_params($dbconn,$q1,array());
  while($row=pg_fetch_row($result)){
    if($n==0){
      $posizione++;
      echo "<div>$posizione</div>";
    }
    else if($n==1) echo "<div>$row[0]</div>";
    else echo "<div>$row[1]</div>";  
  }
}

function classificaUtente($username, $n, $cat){
  $dbconn = pg_connect("host=localhost port=5432 dbname=Progetto user=postgres password=biar") 
  or die('Could not connect: ' . pg_last_error());
  $posizione=0;
  $q1= "select username, $cat from profilo where $cat is not null order by $cat desc";
  $result=pg_query_params($dbconn,$q1,array());
  while($row=pg_fetch_row($result)){
    $posizione++;
    if($row[0]==$username){
      if($n==0){
        if(!$row[1])   echo "<div>n/a</div>"; 
        else  echo "<div>$posizione</div>";
      }
      else if($n==1) echo "<div>$row[0]</div>";
      else{
        if(!$row[1])   echo "<div>n/a</div>"; 
        else echo "<div>$row[1]</div>"; 
      }
    } 
  }
}

function classifica($n,$cat){
  $dbconn = pg_connect("host=localhost port=5432 dbname=Progetto user=postgres password=biar") 
  or die('Could not connect: ' . pg_last_error());
  $posizione=0;
  $q1= "select username, $cat from profilo where $cat is not null order by $cat desc";
  $result=pg_query_params($dbconn,$q1,array());
  while($row=pg_fetch_row($result)){
    if($n==0){
      $posizione++;
      echo "<div>$posizione</div>";
    }
    else if($n==1) echo "<div>$row[0]</div>";
    else echo "<div>$row[1]</div>";  
  }
}

function printRecord($username){
  $dbconn = pg_connect("host=localhost port=5432 dbname=Progetto user=postgres password=biar") 
  or die('Could not connect: ' . pg_last_error());
  $italiano="Italiano";
  $informatica="Informatica";
  $complesse="Complesse";
  
  $q1= "select punti, parole, puntiperminuto, data from record where username=$1 and categoria=$2 order by punti desc";
  $result=pg_query_params($dbconn,$q1,array($username, $italiano));
  echo "<div style='padding-left:3.5%'><br><b>Italiano:</b></div><br>";
  while($row=pg_fetch_row($result)){
    echo "<br>$row[0] &nbsp;|&nbsp; $row[1] &nbsp;|&nbsp; $row[2] &nbsp;|&nbsp; $row[3]"; 
  }

  $q1= "select punti, parole, puntiperminuto, data from record where username=$1 and categoria=$2 order by punti desc";
  $result=pg_query_params($dbconn,$q1,array($username, $informatica));
  echo "<div style='padding-left:3.5%'><br><b>Informatica:</b></div><br>";
  while($row=pg_fetch_row($result)){
    echo "<br>$row[0] &nbsp;|&nbsp; $row[1] &nbsp;|&nbsp; $row[2] &nbsp;|&nbsp; $row[3]"; 
  }
  
  $q1= "select punti, parole, puntiperminuto, data from record where username=$1 and categoria=$2 order by punti desc";
  $result=pg_query_params($dbconn,$q1,array($username, $complesse));
  echo "<div style='padding-left:3.5%'><br><b>Parole Complesse:</b></div><br>";
  while($row=pg_fetch_row($result)){
    echo "<br>$row[0] &nbsp;|&nbsp; $row[1] &nbsp;|&nbsp; $row[2] &nbsp;|&nbsp; $row[3]"; 
  }
}


function getAttributo($att, $username){
  $dbconn = pg_connect("host=localhost port=5432 dbname=Progetto user=postgres password=biar") 
  or die('Could not connect: ' . pg_last_error());

  $q1= "select $att from profilo where username=$1";
  $result=pg_query_params($dbconn,$q1,array($username));

  $row=pg_fetch_row($result);
  
  echo $row[0];
}
?>