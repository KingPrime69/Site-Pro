<?php
require_once "../helpers/config.php";
$sql = "SELECT * FROM user WHERE email='".$_POST['email']."' AND password='".hash('sha1',$_POST['password'])."'";
$pre = $pdo->prepare($sql);
$pre->execute();
$user = current($pre->fetchAll(PDO::FETCH_ASSOC));//current prend la première ligne du tableau
if(empty($user)){ //vérifie si le resultat est vide !
     //non connecté
     $errorShow = array("error");
     $_SESSION['error'] = $errorShow[0];
     header('Location:../connexion.php');
}else{
     $_SESSION['user'] = $user; //on enregistre que l'utilisateur est connecté
     header('Location:../index.php');
}
?>
