<?php
require_once "helpers/config.php";
$sql = "UPDATE css SET `activated` = '1' WHERE theme = '".$_POST['theme']."'";
$pre = $pdo->prepare($sql);
$pre->execute();

$sql = "UPDATE css SET `activated` = '0' WHERE theme not like '".$_POST['theme']."'";
$pre = $pdo->prepare($sql);
$pre->execute();
header('Location:index.php');
?>
