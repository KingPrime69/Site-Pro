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
  if(empty($_POST['background'])){
    $_POST['background'] = $modif['background-image'];
  }
  if(empty($_POST['below'])){
    $_POST['below'] = $modif['below-image'];
  }
  if(empty($_POST['article1'])){
    $_POST['article1'] = $modif['Article-1'];
  }
  if(empty($_POST['article2'])){
    $_POST['article2'] = $modif['Article-2'];
  }
  if(empty($_POST['article3'])){
    $_POST['article3'] = $modif['Article-3'];
  }
  if(empty($_POST['article4'])){
    $_POST['article4'] = $modif['Article-4'];
  }
  if(empty($_POST['article5'])){
    $_POST['article5'] = $modif['Article-5'];
  }
  if(empty($_POST['article6'])){
    $_POST['article6'] = $modif['Article-6'];
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
$sql = "UPDATE css SET `background-image` = :background, `below-image` = :below, `Article-1` = :article1, `Article-2` = :article2, `Article-3` = :article3, `Article-4` = :article4, `Article-5` = :article5, `Article-6` = :article6, `color-font` = :color, `style-font` = :style, `link-font` = :link, `title` = :title WHERE theme = :theme";
$dataBinded=array(
  ':theme'  => $_POST['theme'],
  ':background' => $_POST['background'],
  ':below' => $_POST['below'],
  ':article1' => $_POST['article1'],
  ':article2' => $_POST['article2'],
  ':article3' => $_POST['article3'],
  ':article4' => $_POST['article4'],
  ':article5' => $_POST['article5'],
  ':article6' => $_POST['article6'],
  ':color'=> $_POST['color'],
  ':style'=> $_POST['style'],
  ':link' => $_POST['link'],
  ':title' => $_POST['title']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
header('Location:theme.php');
?>
