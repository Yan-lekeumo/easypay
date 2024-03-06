<?php
//include("security.php");
include 'database.php';

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
$num = $_POST['num'];
$pays = $_POST['pays'];
$ville = $_POST['ville'];
$quartier = $_POST['quartier'];
$pwd = $_POST['pwd'];
$confirm_pwd = $_POST['confirm_pwd'];
$roles = $_POST['role'];

try {
    $pdo->beginTransaction();
    $sql = "INSERT INTO utilisateur(nom, prenom,mail,numero,pays,ville,quartier,motdepasse,roles) VALUES ('$nom', '$prenom','$mail','$num','$pays','$ville','$quartier','$pwd','$roles')";

    $result = $pdo->query($sql);

    if ($result) {
        
        $pdo->commit();
        $rowCount = $result->rowCount();
        if ($rowCount > 0) {
            header("Location: login.php"); 
            exit(); 
        } else {
            echo "Aucune ligne n'a été insérée.";
        }
    } else {
        throw new Exception("Erreur lors de l'exécution de la requête SQL.");
    }
} catch (Exception $e) {
    $pdo->rollBack();
    echo "Erreur : " . $e->getMessage();
}
?>