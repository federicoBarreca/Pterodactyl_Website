<html>
    <head>
        <!--FUNZIONE PER L'INVIO DEI FEEDBACK-->
    </head>
    <body>

        <?php

            $dbconn = pg_connect("host=localhost port=5432 dbname=Progetto user=postgres password=biar") 
            or die('Could not connect: ' . pg_last_error());
            if(!(isset($_POST['sendFeedback']))){
                header("Location: index.php");
            }
            else{
                
                    $commento=$_POST['commento'];
                    $q2="insert into Feedback values ($1)";
                    $data=pg_query_params($dbconn,$q2,array($commento));
                    if($data){
                        header("Location: ../index.php");
                    }
                }
        ?>

    </body>
</html>