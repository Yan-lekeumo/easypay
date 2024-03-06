<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <title>CREATION DE COMPTE</title>
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
        <a class="navbar-brand" href="login.php">Login</a>
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
    <section class="mb-5">
    <div class="container space">
        <div class="card">
            <div class="card-header bg-primary"><h1>remplissez les champs demandes</h1></div>
         <div class="card-body">   
           
            <form method="POST" action="save_user.php">
              <script>
                <?php
                 if (isset($erreur_mot_de_passe)){
                    echo "document.getelementbyid('erreur_mot_de_passe').innertext= '".$erreur_mot_de_passe."';";
                 }
                 ?>
              </script>
            <div class="form-group">
            <label for="nom"> NOM :</label>
            <input type="text" id="nom" name="nom" required/>
            </div>
            <div class="form-group">
            <label for="prenom"> PENOM :</label>
            <input type="text" id="prenom" name="prenom" required/>
            </div>
            <div class="form-group">
            <label for="mail"> e-mail :</label>
            <input type="mail" id="mail" name="mail" required/>
            </div>
            <div class="form-group">
            <label for="num"> NUMERO DE TELEPHONE :</label>
            <input type="text" id="num" name="num" required/>
            </div>
            <div class="form-group">
            <label for="pays"> Pays :</label>
            <input type="text" id="pays" name="pays" required/>
            </div>
            <div class="form-group">
            <label for="ville"> Ville :</label>
            <input type="text" id="ville" name="ville" required/>
            </div>
            <div class="form-group">
            <label for="quartier"> quartier :</label>
            <input type="text" id="quartier" name="quartier" required/>
            </div>
            <div class="form-group">
            <label for="pwd"> entrer un mot de passe :</label>
            <input type="password" id="pwd" name="pwd" required/>
            </div>
            <div class="form-group">
            <label for="confirm_pwd"> confirmer  le mot de passe :</label>
            <input type="password" id="confirm_pwd" name="confirm_pwd" required/>
            </div>
            <div class="form-group">
            <label for="role">vendeur ou acheteur :</label>
            <select name="role" id="role" >
                <option value="acheteur">ACHETEUR</option>
                <option value="vendeur">VENDEUR</option>
            </select>
            </div>
            <p> <b>NB :</b> Vous pouvez creer un compte acheteur pour vos achats et un autre pour vos ventes</p>

            <div class="form-group">
                
            <button type="submit" class="btn btn-primary "> <b>S'INSCRIRE </b> 
            
            </button>
            </div>
            <div id="erreur_mot_de_passe" style="color: red;"></div>
            
           </form>
           </div>
        </div>   
    </div>  
    </section>  







    <?php
    include("pied.php");

    ?>
    
</body>
</html>