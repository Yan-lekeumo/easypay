<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <title>EASY PAY</title>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
   .logo-left {
    position: absolute;
    top: 50px;
    left: 150px;
    max-width: 180px; 
}
    .logo-right{
        position: absolute;
    top: 50px;
    right: 150px; 
    max-width: 180px; 
}
    </style>
    <header class="bg-dark text-white text-center py-5">
    <div class="container">
        <img src="../images/logo.jpg" alt="Logo du site" class="logo-left">
        <img src="../images/logo.jpg" alt="Logo du site" class="logo-right">
        <h1 class="display-3">EASY PAY</h1>
        <p class="lead">BIENVENUE DANS TA PLATEFORME DE PAIEMENTS SÉCURISÉS</p>
    </div>
</header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="Aide.php">Aide</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Déconnexion</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</head>

</html>

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
    <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                
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

    <?php
    include("pied.php");
    ?>
</body>
</html>