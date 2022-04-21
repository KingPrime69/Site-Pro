<?php
require_once "../helpers/config.php";

$conn = mysqli_connect('localhost','root');

$sql = "SELECT * FROM user WHERE username='".$_POST['username']."' AND password='".hash('sha1',$_POST['password'])."'";
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
     $_SESSION['username'] = $_POST['email'];
     header('Location:../index.php');
}
?>
