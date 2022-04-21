<?php require_once 'helpers/config.php'; ?>
<html>
  <?php require_once 'helpers/head.php'; ?>
  <body>
    <?php require_once 'content/navbar.php'; ?>
    <?php
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
      foreach ($data as $live):
    ?>
    <div class="box bg-black no-margin">
      <h1 class="style-font no-margin color-text"> <?php echo $live['title']; ?></h1>
    <?php endforeach; ?>

      <div class="row center-align">
          <div class="col l2">
            <img src="<?php echo $live['Article-1']; ?>" >
          </div>

          <div class="col l2">
            <img src="<?php echo $live['Article-2']; ?>" >
          </div>

          <div class="col l2">
            <img src="<?php echo $live['Article-3']; ?>" >
          </div>

          <div class="col l2">
            <img src="<?php echo $live['Article-4']; ?>" width="271px" height="377px">
          </div>

          <div class="col l2">
            <img src="<?php echo $live['Article-5']; ?>" width="271px" height="377px" >
          </div>

          <div class="col l2">
            <img src="<?php echo $live['Article-6']; ?>" width="271px" height="377px">
          </div>
      </div>

        <div class="center-align button-box">
            <a class="btn-box style-font color-text" href="index.php"> AJOUTER AU PANIER </a>
        </div>

          <div class="center-align button-box">
              <a class="btn-box style-font color-text" href="index.php" style="width:130px"> EN SAVOIR PLUS </a>
          </div>
    </div>


    <div class="concept">

      <div class="center-align">
        <img src="<?php echo $live['below-image']; ?>" >
      </div>

      <h2 class="style-font"> NOTRE CONCEPT</h2>

    <p class="pbox">
    Gamebox propose tous les mois des box de jeux et goodies sur différents thèmes.<br>
    Chaque mois nous vous proposons une box contenant quatres jeux et deux goddies <br>
    Trois jeux et un goodies sont connus à l'avance et le quatrième jeu ainsi que le dernier goodies <br>
    sont des mystères. Les objets mystères seront bien sur en lien avec le thème du mois.
    </p>

    <?php require_once 'helpers/footer.php'; ?>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
