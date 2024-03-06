<?php
include("database.php");
$num =  $_POST['num'];
$motdepasse= $_POST['motdepasse'];

$sql =$pdo->prepare("SELECT * FROM utilisateur WHERE numero =? AND motdepasse=? ");
$sql->execute(array($num,$motdepasse));

if($user = $sql->fetch()) {
    session_start();
    $_SESSION['profil']=$user;
    header("location: page_principal.php");
    exit();
}else{
    header("location:erreur_login.php");
}
?>