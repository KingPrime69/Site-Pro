<?php
require_once "../helpers/config.php";
$sql = "INSERT INTO css(`theme`,`color-font`,`style-font`) VALUES(:theme,:color,:style)";
$dataBinded=array(
  ':theme'  => $_POST['theme'],
  ':color-font'=> $_POST['color'],
	':style-font'=> $_POST['style']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
header('Location:../index.php');
?>
