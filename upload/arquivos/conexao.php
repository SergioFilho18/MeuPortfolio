<?php

$host = "localhost";
$user = "root";
$pass = "";
$bd = "meuportifolio";

$mysqli = new mysqli($host, $user, $pass, $bd);


/* check connection */

if($mysqli->connect_errno){
    echo "Connect Failed: " . $mysqli->connect_error;
    exit();
}