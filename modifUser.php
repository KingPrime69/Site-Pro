<?php
  require_once "helpers/config.php";
  $verif = "SELECT * FROM `user` WHERE `email` = :email";
  $dataBinded=array(
    ':email'  => $_POST['email']
  );
  $pre = $pdo->prepare($verif);
  $pre->execute($dataBinded);
  $data = $pre->fetchAll(PDO::FETCH_ASSOC);

  if(empty($data)){
    $sql = "UPDATE `user` SET `email`= :email WHERE `id`= :id";
    $dataBinded=array(
      ':id' => $_POST['id'],
      ':email'  => $_POST['email'],
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
  }
?>
