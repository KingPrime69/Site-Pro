<?php
$pdo = new PDO(
    'mysql:host=localhost;dbname=gamebox;',
    'root',
    '',
    array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);

  $sql = "SELECT theme FROM `css` WHERE activated = 1";
  $pre = $pdo->prepare($sqltheme);
  $pre->execute();
  $dataTheme = $pre->fetchAll(PDO::FETCH_ASSOC);

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
  margin: 0%;
  padding: 0%!important;
  border-color: white;
  border-width: 1px;
  border-style: solid;
  margin-top: 10px !important;
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
  background-image: url("img/fond.jpg");
  background-size: cover;
  background-position: center;
  height: 900px;
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

.border{
  border-right-color: white;
  border-right: solid;
}

.bodyform {
  background: black;
  font-family: Montserrat, "sans-serif";
  display: flex;
  justify-content: center;
  color: #303030;
}


.contactez-nous {
  width: 700px;
  border: 1px solid;
  border-radius: 8px;
  padding: 0 50px 0 50px;
  background: white;
}

.contactez-nous > h1 {
  font-weight: 500;
}

.contactez-nous > p {
  font-weight: 300;
}

form div {
  width: 100%;
  display: flex;
  flex-direction: column;
  min-height: 83px;
  margin-top: 25px;
}

form div > label {
  margin-bottom: 7px;
  font-weight: 600;
}

form div > input, form div > select, form div > textarea {
  background: white;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  font-weight: 500;
  font-family: Montserrat, "sans-serif";
  box-shadow: 0px 2px 2px 0px rgba(0,0,0,0.25);
}

form div > input, form div > select {
  height: 50px;
  padding-left: 10px;
}

form div > select {
  appearance: none;
  background-size: 15px;
  background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDIxMy4zMzMgMjEzLjMzMyIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGc+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+Cgk8Zz4KCQk8cG9seWdvbiBwb2ludHM9IjAsNTMuMzMzIDEwNi42NjcsMTYwIDIxMy4zMzMsNTMuMzMzICAgIiBmaWxsPSIjMzAzMDMwIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BvbHlnb24+Cgk8L2c+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPC9nPjwvc3ZnPg==');
  background-position: right 10px top 50%;
  background-repeat: no-repeat;
}

form div > textarea {
  height: 195px;
  padding: 15px 0px 0px 10px;
}

form div > input::placeholder, form div > textarea::placeholder {
  color: white;
}

form div > select:invalid {
  color: white;
}

form div > select option {
  background: white;
  color: #303030;
}

form div:last-child {
  align-items:center;
  margin-top: 20px;
}

form button {
  width: 450px;
  max-width: 500px;
  height: 60px;
  font-weight: 700;
  font-size: 28px;
  background: white;
  border: rgba(48, 48, 48, 0.5) solid 1px;
  border-radius: 5px;
  box-shadow: 0px 4px 4px 0px rgba(0,0,0,0.25);
  color: #303030;
}
