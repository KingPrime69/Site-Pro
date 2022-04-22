<?php
  require_once "helpers/config.php";
  $sql = "UPDATE contact SET `treaty` = '1' WHERE id = '".$_POST['id']."'";
  $pre = $pdo->prepare($sql);
  $pre->execute();
  header('Location:message.php');
?>
