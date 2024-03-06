<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <title>VERIFICATION DES FONDS</title>
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
            background-repeat: ;
            height: 100vh; 
        }
        
    </style>

<div class="container mt-5">
    <div class="card col-md-6 mx-auto">
        <div class="card-header bg-primary text-white"><h1>Vérifier la disponibilité d'un paiement ici</h1></div>
        <div class="card-body">    
            <form method="POST" action="check_funds.php">
                <div class="form-group">
                    <label for="sale_id">Insérer le code de la transaction fourni par votre client :</label>
                    <input type="text" id="sale_id" name="sale_id" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="num_acheteur">Numéro de téléphone de l'acheteur :</label>
                    <input type="text" id="num_name" name="num_acheteur" class="form-control" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-secondary btn-block">VÉRIFIER LA DISPONIBILITÉ DES FONDS</button>
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