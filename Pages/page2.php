
Pour ajouter une image en arrière-plan qui prend toute la page à votre code HTML, vous pouvez modifier la structure pour inclure les balises `<style>` et définir le CSS nécessaire pour l'image de fond. Voici comment vous pouvez le faire :

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <title>EASY PAY</title>
    <?php
    include("entete.php");
    ?>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('../Images/image1.jpg'); /* Remplacez 'chemin_vers_votre_image.jpg' par le chemin de votre image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh; /* 100% de la hauteur de la vue */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header bg-secondary text-light"><h2>CHOISIS L'OPÉRATION</h2></div>
                    <div class="card-body">
                        <a href="Effectuer_un_payement.php" class="btn btn-primary btn-lg btn-block mb-3">EFFECTUER UN PAIEMENT</a>
                        <a href="verification_des_fonds.php" class="btn btn-primary btn-lg btn-block mb-3">VÉRIFICATION DE LA DISPONIBILITÉ DES FONDS</a>
                        <a href="confirmation_transaction.php" class="btn btn-primary btn-lg btn-block">CONFIRMATION DE RECEPTION</a>
                        <a href="confirmation_livraison.php" class="btn btn-primary btn-lg btn-block">CONFIRMATION DE LIVRAISON</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include("pied.php");
    ?>
</body>
</html>