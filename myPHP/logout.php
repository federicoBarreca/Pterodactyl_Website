<?php
session_start();
?>
<html>
    <head></head>
    <body>
        <?php
            // remove all session variables
            session_unset(); 

// destroy the session 
            session_destroy();
            header("Location: ../index.php")
        ?>
    </body>
</html>