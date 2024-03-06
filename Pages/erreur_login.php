<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULAIRE PRODUIT</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>
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
<body class="bg-light">
    <header class="bg-dark text-white text-center py-5">
        <div class="container">
            <h1 class="display-3">EASY PAY</h1>
            <p class="lead">BIENVENUE DANS TA PLATEFORME DE PAIEMENTS SÉCURISÉS</p>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="Aide.php">Aide</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</head>    
<body>
    <div class="container mt-5">
        <div class="card col-md-6 mx-auto">
            <div class="card-header bg-secondary text-light"><h2>VEUILLEZ VOUS CONNECTER</h2></div>
            <div class="card-body">
                <article>
                <p> <b>Il n'existe pas d'utilisateur avec ces coordonnees</b></p> 
                     <p> <b>Bien vouloir vous reconnecter ou vous inscrire</b> </p>
                </article>
                <form action="authentification.php" method="POST">
                    <div class="form-group">
                        <label for="num" class="label-control">Entrer votre numéro :</label>
                        <input type="text" name="num" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="motdepasse" class="label-control">MOT DE PASSE :</label>
                        <input type="password" name="motdepasse" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">CONNEXION</button>
                    </div>
                </form>
                <p><b>Vous n'avez pas de compte? Créez un compte</b> <a href="creation.php">ici</a></p>
            </div>
        </div>
    </div>

    <?php
    include("pied.php");
    ?>
</body>
</html>