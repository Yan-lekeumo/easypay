<?php
include 'database2.php';
$montant = $_POST['montant'];
$nomacheteur = $_POST['nom_acheteur'];
$prenomacheteur = $_POST['pre_acheteur'];
$numeroacheteur = $_POST['num_acheteur'];
$nomvendeur = $_POST['nom_vendeur'];
$prenomvendeur = $_POST['pre_vendeur'];
$numerovendeur = $_POST['num_vendeur'];

function genereidentifiant(){

    $code = str_pad(mt_rand(0, 99999999),8,'0',STR_PAD_LEFT);
    return $code;
}
function generecode(){

    $confirm = str_pad(mt_rand(0, 99999),5,'0',STR_PAD_LEFT);
    return $confirm;
}
function generecode2(){

    $confirm = str_pad(mt_rand(0, 99999),5,'0',STR_PAD_LEFT);
    return $confirm;
}

$statuttransaction = "non terminee";
$statutreception = "non recu";
$statutlivraison = "non livrer";
$statut = "disponible";
$liv= generecode2();
$conf = generecode();
$cle = genereidentifiant();
$sql = "INSERT INTO transactions(montant, nomacheteur,prenomacheteur,numeroacheteur,nomvendeur,prenomvendeur,numerovendeur,codetransaction,statut,codeconfirmation,codelivraison)VALUES('$montant', '$nomacheteur','$prenomacheteur','$numeroacheteur','$nomvendeur','$prenomvendeur','$numerovendeur','$cle','$statut','$conf','$liv')";
$sql2="INSERT INTO commande(codetransaction,statutlivraison,statutreception) VALUES ('$cle','$statutlivraison','$statutreception')";

?>
<?php if($connexion->query($sql)=== TRUE AND $connexion->query($sql2)=== TRUE ) { ?>
    <?php
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
                    <div class="card-header bg-secondary text-light"><h2>CHOISIS L'OPÉRATION</h2></div>
                    <div class="card-body">
                    <?php   
                    echo 'Transaction reussie. Le Code de la transaction est : <strong>'.$cle.' </strong>. Vous pouvez le donner a votre vendeur</br></br>';
                    echo 'Le Code pour confirmer la transaction est : <strong>'.$conf.' </strong></br></br>';
                    echo '<b>BIEN VOULOIR RECOPIER ET SAUVEGARDER! Nb: ne partaeger le code de confirmation avec personne</b>';
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
 
