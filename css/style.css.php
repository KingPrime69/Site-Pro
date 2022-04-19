<?php
$pdo = new PDO(
    'mysql:host=localhost;dbname=gamebox;',
    'root',
    '',
    array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);


  $sqlColor = "SELECT `color-font` FROM `css` WHERE `theme` = 'HALLOWEEN'";
  $pre = $pdo->prepare($sqlColor);
  $pre->execute();

  $color= current($pre->fetchAll(PDO::FETCH_ASSOC));

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
  color: <?php echo $color; ?>;
}

.style-font{
  font-family: 'Rubik Wet Paint', cursive;
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
