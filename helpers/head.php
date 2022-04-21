<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
  <?php foreach ($data as $link): ?>
    <?php echo $link['link-font'];?>
  <?php endforeach; ?>
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
 <style><?php include "css/style.css.php"; ?></style>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
