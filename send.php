<?php
  require_once "helpers/config.php";
  $sql = "INSERT INTO contact(`name`, `email`, `object`, `text`) VALUES(:name, :email, :object, :texte)";
  $dataBinded=array(
    ':name' => $_POST['name'],
    ':email' => $_POST['email'],
    ':object' => $_POST['object'],
    ':texte' => $_POST['texte'],
  );
	$pre = $pdo->prepare($sql);
	$pre->execute($dataBinded);
  header('Location:contact.php');
?>
