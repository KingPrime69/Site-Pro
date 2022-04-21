<?php
require_once "helpers/config.php";
$verif = "SELECT * FROM `css` WHERE `theme` = :theme";
$dataBinded=array(
  ':theme'  => $_POST['theme'],
);
$pre = $pdo->prepare($verif);
$pre->execute($dataBinded);
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
  if(empty($_POST['title'])){
    $_POST['title'] = $modif['title'];
  }
}
$sql = "UPDATE css SET `color-font` = :color, `style-font` = :style, `link-font` = :link, `title` = :title WHERE theme = :theme";
$dataBinded=array(
  ':theme'  => $_POST['theme'],
  ':color'=> $_POST['color'],
  ':style'=> $_POST['style'],
  ':link' => $_POST['link'],
  ':title' => $_POST['title']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
header('Location:theme.php');
?>
