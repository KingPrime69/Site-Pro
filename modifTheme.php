<?php
require_once "helpers/config.php";
$verif = "SELECT * FROM `css` WHERE `theme` ='".$_POST['theme']."'";
$pre = $pdo->prepare($verif);
$pre->execute();
$data = $pre->fetchAll(PDO::FETCH_ASSOC);
foreach ($data as $modif) {
  if(empty($_POST['color'])){
    $_POST['color'] = $modif['color-font'];
  }
  if(empty($_POST['style'])){
    $_POST['style'] = $modif['style-font'];
  }
  if(empty($_POST['link'])){
    $_POST['link'] = $modif['link-font'];
  }
}
$sql = "UPDATE css SET `color-font` = '".$_POST['color']."', `style-font` = '".$_POST['style']."', `link-font` = '".$_POST['link']."' WHERE theme = '".$_POST['theme']."'";
$pre = $pdo->prepare($sql);
$pre->execute();
header('Location:index.php');

?>
