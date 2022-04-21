<?php
require_once "helpers/config.php";
$sql = "INSERT INTO css(`theme`,`color-font`,`style-font`,`link-font`,`title`) VALUES(:theme,:color,:style,:link,:title)";
$verif = "SELECT * FROM css WHERE theme='".$_POST['theme']."'";
$pre = $pdo->prepare($verif);
$pre->execute();
$data = $pre->fetchAll(PDO::FETCH_ASSOC);
$dataBinded=array(
  ':theme'  => $_POST['theme'],
  ':color'=> $_POST['color'],
	':style'=> $_POST['style'],
	':link' => $_POST['link']
  ':title' => $_POST['title']
);
if (empty($data)) {
	$pre = $pdo->prepare($sql);
	$pre->execute($dataBinded);
}
header('Location:theme.php');
?>
