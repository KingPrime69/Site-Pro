<?php
  require_once "helpers/config.php";
    $sql = "UPDATE `user` SET `activated`= '1' WHERE `id`= '".$_POST['id']."'";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    header('Location:user.php');
?>
