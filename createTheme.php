<?php
require_once "helpers/config.php";
$sql = "INSERT INTO css(`theme`,`color-font`,`style-font`,`link-font`,`title`,`Article-1`,`Article-2`,`Article-3`,`Article-4`,`Article-5`,`Article-6`) VALUES(:theme,:color,:style,:link,:title,:article1,:article2,:article3,:article4,:article5,:article6)";
$verif = "SELECT * FROM css WHERE theme='".$_POST['theme']."'";
$pre = $pdo->prepare($verif);
$pre->execute();
$data = $pre->fetchAll(PDO::FETCH_ASSOC);
$dataBinded=array(
  ':theme'  => $_POST['theme'],
  ':article1' => $_POST['article1'],
  ':article2' => $_POST['article2'],
  ':article3' => $_POST['article3'],
  ':article4' => $_POST['article4'],
  ':article5' => $_POST['article5'],
  ':article6' => $_POST['article6'],
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
