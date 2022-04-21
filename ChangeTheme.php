<?php
require_once "helpers/config.php";
if (empty($_POST['theme'])) {
  header('Location:admin.php');
}
else {
  $sql = "UPDATE css SET `activated` = '1' WHERE theme = :theme";
  $dataBinded=array(
    ':theme'  => $_POST['theme'],
  );
  $pre = $pdo->prepare($sql);
  $pre->execute($dataBinded);

  $sql = "UPDATE css SET `activated` = '0' WHERE theme not like :theme";
  $pre = $pdo->prepare($sql);
  $pre->execute($dataBinded);
  header('Location:index.php');
}
?>
