<?php

// Turn on error reporting
error_reporting(E_ALL);

// Display errors to the browser

ini_set('display_errors', 1);


    define("HOSTNAME","localhost");
    define("USERNAME","root");
    define("PASSWORD","");
    define("DATABASE","crude_db");

    $connection= mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);
    if(!$connection){
        die("Connection Failed");

    }else{
        // echo"Your connection has been  established !!";
    }



?>