<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <title>CONFIRMATION DE TRANSACTION</title>
</head>
<body>
<?php
    include("entete.php");
?>
            <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('../Images/image3.jpg');/
            background-size: 50% 50%;
            background-position: center;
            height: 100vh; 
        }
        form{
            background-color: transparent ;
            border : none;
        }
        form input,
        form select,
        form textarea {
            border : none;
            background-color: transparent ;
            border-bottom: 1px solid;
            margin-bottom: 10 px;
            padding: 5px;
        }
    </style>
    
    </style>
  <div class="jumbotron text-center">
            <p class="lead">Facilitez vos transactions en toute sécurité avec Easy Pay.</p>
            <hr class="my-4">
            <p>Confirmez vos paiements en quelques clics ici!</p>
        </div>
<div class="container mt-5">
    <div class="card col-md-6 mx-auto">
        <div class="card-header bg-primary text-white"><h1>Confirmer un paiement ici</h1></div>
        <div class="card-body">    
            <form method="POST" action="confirm_reception.php">
                <div class="form-group">
                    <label for="sale_id">Insérer le code de la transaction à confirmer :</label>
                    <input type="text" id="sale_id" name="sale_id" class="form-control">
                </div>
                <div class="form-group">
                    <label for="conf_id">Insérer votre code de confirmation :</label>
                    <input type="text" id="conf_id" name="conf_id" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block" onclick="return confirm('Voulez-vous vraiment confirmer cette transaction?')">CONFIRMER LA TRANSACTION</button>
                </div>
            </form>
        </div>
    </div>
</div>    

<?php
    include("pied.php");
?>

</body>
</html>