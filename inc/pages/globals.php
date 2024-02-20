<?php
    $dbconn = pg_connect (" host = localhost 
                            port = 5432
                            dbname = ltw
                            user = postgres 
                            password = biar" )
                            or die ( " Could not connect : ". pg_last_error ());
    

    $loggedInUser = null;

    if(isset($_SESSION['user'])){
        $loggedInUser = $_SESSION['user'];
    }

?>