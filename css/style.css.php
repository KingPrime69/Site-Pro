<?php
$pdo = new PDO(
    'mysql:host=localhost;dbname=gamebox;',
    'root',
    '',
    array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);

  $sqltheme = "SELECT theme FROM `css` WHERE activated = 1";
  $prep = $pdo->prepare($sqltheme);
  $prep->execute();
  $dataTheme = $prep->fetchAll(PDO::FETCH_ASSOC);

  foreach ($dataTheme as $theme) {
    $sql = "SELECT * FROM `css` WHERE `theme` = '".$theme['theme']."'";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $data = $pre->fetchAll(PDO::FETCH_ASSOC);
  }
?>


h1 {
  text-align: center;
}

h2 {
  text-align: center;
}

img{
  margin: 4%;
  padding: 0%!important;
  border-color: white;
  border-width: 1px;
  border-style: solid;
  margin-top: 100px;
}

.no-margin{
  margin: 0 !important;
}

.color-text{
  <?php foreach ($data as $color): ?>
    color: <?php echo $color['color-font'];?>
  <?php endforeach; ?>
}

.style-font{
  <?php foreach ($data as $font): ?>
    font-family: <?php echo $font['style-font'];?>;
  <?php endforeach; ?>
}

.bg-black {
  background-image: url("../img/fond.jpg");
  background-size: cover;
  background-position: center;
  height: 1000px;
}

.box{
  margin-top: 2px !important;
}

.button-box{
  margin: 3% !important
}

.btn-box {
  background-color: black!important;
  padding: 10px 24px;
  font-size: 30px;
}

.big{
  font-size: 100px;

}

.pbox {
  text-align:center;
  font-size: 30;
  margin-top: 50px;
}

.gg{
  margin-top: 25px;
}

.signin{
  display: none;

}

.btnCo{
  border-color: #0089ff;
  color: #0089ff;
  border-width: 1px;
  border-style: solid;
  border-radius: 5%;
  font-size: 100px;
}

.btnText{
  font-size: 100%;
}


footer{
  background-color: black!important;
  border-top: 6px solid rgba(51, 51, 51, 0.25);
  margin-top: 100px;
  text-align: center;
}

footer p{
  margin-right: auto;
  margin-left: auto;
}
