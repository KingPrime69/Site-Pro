<?php
require_once "../helpers/config.php";
$sql = "INSERT INTO user(email,password) VALUES(:email,:password)";
$verif = "SELECT * FROM user WHERE email='".$_POST['email']."'";
$pre = $pdo->prepare($verif);
$pre->execute();
$data = $pre->fetchAll(PDO::FETCH_ASSOC);
$dataBinded=array(
  ':email'  => $_POST['email'],
  ':password'=> hash('sha1',$_POST['password']),
);
if (empty($data)){
  $pre = $pdo->prepare($sql);
  $pre->execute($dataBinded);
}
else{
}
header('Location:../index.php');
?>
