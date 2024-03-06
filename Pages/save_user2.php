<?php
//include("security.php");
include 'database2.php';



$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
$num = $_POST['num'];
$pays = $_POST['pays'];
$ville = $_POST['ville'];
$quartier = $_POST['quartier'];
$pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
$confirm_pwd = $_POST['confirm_pwd'];
$roles = $_POST['role'];

if($pwd === password_hash($confirm_pwd, PASSWORD_DEFAULT)){
    $sql = "INSERT INTO utilisateur(nom,prenom,mail,numero,pays,ville,quartier,motdepasse,roles) VALUES ('$nom', '$prenom','$mail','$num','$pays','$ville','$quartier','$pwd','$roles')";
 //$sql =$pdo->prepare("INSERT INTO utilisateur(nom, prenom,mail,numero,pays,ville,quartier,motdepasse, role ) VALUES (?,?,?,?,?,?,?,?,?)");
 //$params = array($nom,$prenom,$mail,$num,$pays,$ville,$quartier,$pwd,$role);
//$sql->execute($params);
//header("location:login.php");

}else{
    $erreur_mot_de_passe = "Les mots de passe ne correspondent pas ";
    //header("location:erreur_creation.php")
}


?>