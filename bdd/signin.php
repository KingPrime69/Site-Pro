<?php
require_once "../helpers/config.php";

$conn = mysqli_connect('localhost','root');

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$hashed = hash('sha1',$password);

$sql = "INSERT INTO user(email,username,password) VALUES('$email','$username','$hashed')";

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
