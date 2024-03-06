<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <title>EFFECTUER UN PAYEMENT</title>
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
    <section class="mb-5">
    <!-- <div class="container space"> -->
             <div class="card-header bg-primary"><h1 >EFFECTUER VOTRE PAIEMENT ICI</h1></div> 
         <div class="card-body">   
           
            <form method="POST" action="process_payment.php">
            <div class="form-group">
            <label for="montant"> MONTANT A PAYER :</label>
            <input type="text" id="montant" name="montant" required/>
            </div>
            
            
            <div class="form-group">
            <label for="nom_acheteur"> NOM DE L'ACHETEUR :</label>
            <input type="text" id="nom_acheteur" name="nom_acheteur" required/>
            </div>
            <div class="form-group">
            <label for="penom_acheteur"> PRENOM DE L'ACHETEUR :</label>
            <input type="text" id="prenom_acheteur" name="pre_acheteur" required/>
            </div>
            <div class="form-group">
            <label for="num_acheteur"> NUMERO DE TELEPHONE DE L'ACHETEUR  :</label>
            <input type="text" id="num_acheteur" name="num_acheteur" required/>
            </div>
            
            <div class="form-group">
            <label for="nom_vendeur"> NOM DU VENDEUR :</label>
            <input type="text" id="nom_vendeur" name="nom_vendeur" required/>
            </div>
            <div class="form-group">
            <label for="penom_vendeur"> PRENOM DU VENDEUR :</label>
            <input type="text" id="prenom_vendeur" name="pre_vendeur" required/>
            </div>
            <div class="form-group">
            <label for="num_vendeur"> NUMERO DE TELEPHONE DU VENDEUR :</label>
            <input type="text" id="num_vendeur" name="num_vendeur" required/>
            </div>

            <div class="form-group">
            <button type="submit" class="btn btn-primary " onclick="return confirm('voulez-vous vraiment effectuer le paiement??')"> <b>EFFECTUER LE PAIEMENT </b> </button>
            </div>
            
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