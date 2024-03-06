<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "easypay";

$connexion = new mysqli($servername,$username,$password,$dbname );

if($connexion->connect_error){
    die("Echec de la connexion a la base de donnee :".$connexion->connect_error);
}