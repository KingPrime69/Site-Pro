<?php
require_once "helpers/config.php";
if (empty($_POST['theme'])) {
  header('Location:admin.php');
}
else {
  $sql = "UPDATE css SET `activated` = '1' WHERE theme = '".$_POST['theme']."'";
  $pre = $pdo->prepare($sql);
  $pre->execute();

  $sql = "UPDATE css SET `activated` = '0' WHERE theme not like '".$_POST['theme']."'";
  $pre = $pdo->prepare($sql);
  $pre->execute();
  header('Location:index.php');
}
?>
