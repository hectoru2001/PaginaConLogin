<?php 

    session_start();
    session_destroy();
    header("location: ../inicio_ses.php")

?>