<?php
include 'database2.php';
$sale_id = $_POST['sale_id'];
$conf_id = $_POST['conf_id'];

$sql = "UPDATE commande SET statutreception = 'recu' WHERE codetransaction = '$sale_id'";

if($connexion->query($sql)=== TRUE){
    include("entete.php");
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <title>EASY PAY</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('../Images/image3.jpg');/
            background-size: 50% 50%;
            background-position: center;
            background-repeat: ;
            height: 100vh; 
        }
        
    </style>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header bg-secondary text-light"><h2>STATUT TRANSACTION</h2></div>
                    <div class="card-body">
                    <?php
                    echo "<b>Transaction recu avec succes<b>";
                    ?>        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php
    include("pied.php");
    ?>
 <?php } ?>