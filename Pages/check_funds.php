<?php
include 'database2.php';

$sale_id = $_POST['sale_id'];
$num_acheteur = $_POST['num_acheteur'];

$sql = "SELECT * FROM transactions WHERE codetransaction = '$sale_id' AND numeroacheteur = '$num_acheteur' ";

 $result= $connexion->query($sql);
 if($result->num_rows > 0){ 
    
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
                  echo '<b>Les fonds sont disponibles pour la vente<b>  avec l\'identifiant : '.$sale_id. '.Vous pouvez proceder a la livraison';
                    ?>
         <?php while($code = $result->fetch_assoc()){ ?>
                   
            <b><p>Code de confirmation de transaction:<b></p><b><?php echo($code['codetransaction']);?></b>
            <b><p>Votre code de confirmation de livraison est :<b></p><b><?php echo($code['codelivraison']);?> </b>
        
        <?php }?>
        <p> <b>NB: Ne partagez votre code confimation de livraison avec personne</b></p>           
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include("pied.php");
    ?>
 <?php } ?>
 <? else { 
    echo 'Aucune vente trouvee l\'identifiant '.$sale_id.' ou avec le numero de cet acheteur , ou la transaction n\'est pas terminee';

}
$connexion->close();



?>