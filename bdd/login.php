<?php
require_once "../helpers/config.php";
$sql = "SELECT * FROM user WHERE email = :email AND password= :password";
$dataBinded=array(
  ':email'  => $_POST['email'],
  ':password' => hash('sha1',$_POST['password'])
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
$data = $pre->fetchAll(PDO::FETCH_ASSOC);
if(empty($data)){ //vérifie si le resultat est vide !
     //non connecté
     $errorShow = array("error");
     $_SESSION['error'] = $errorShow[0];
     unset($_SESSION['user']);
     session_destroy();
     header('Location:../connexion.php');
}
else{
  foreach ($data as $user) {
    if ($user['activated'] == 1) {
      $_SESSION['user'] = $user; //on enregistre que l'utilisateur est connecté
    }
    else{
      //renvoie que le compte est bloqué
    }
  }
   header('Location:../connexion.php');
}
?>
