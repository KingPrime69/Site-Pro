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
      <h1 class="style-font no-margin color-text"> LA GAMEBOX D'OCTOBRE SUR LE THEME </h1>

      <h2 class="style-font big color-text">HALLOWEEN</h2>

      <div class="row center-align">
<<<<<<< HEAD
          <div class="col l2  s6 no-margin">
=======
          <div class="col l2  s6 no-margin imge">
>>>>>>> ee02ad8b2d3817b4a549d985e93e3787225d4a9f
            <a href="Produit.php"> <img src="<?php echo $live['Article-1']; ?>" ></a>
          </div>

          <div class="col l2 s6 no-margin">
            <a href="Produit.php"> <img src="<?php echo $live['Article-2']; ?>" > </a>
          </div>

          <div class="col l2 s6 no-margin">
           <a href="Produit.php"> <img src="<?php echo $live['Article-3']; ?>" ></a>
         </div>
          <div class="col l2 s6 no-margin">
            <a href="Produit.php"> <img src="<?php echo $live['Article-4']; ?>" width="271px" height="377px"></a>
          </div>

          <div class="col l2 s6 no-margin">
            <a href="Produit.php"> <img src="<?php echo $live['Article-5']; ?>" width="271px" height="377px" ></a>
          </div>

<<<<<<< HEAD
          <div class="col l2 s6 no-margin">
=======
          <div class="col l2 s6 no-margin imge">
>>>>>>> ee02ad8b2d3817b4a549d985e93e3787225d4a9f
            <a href="Produit.php"> <img src="<?php echo $live['Article-6']; ?>" width="271px" height="377px"></a>
          </div>
      </div>
      <?php endforeach; ?>
        <div class="center-align button-box">
            <a class="btn-box style-font color-text" href="Achat.php"> AJOUTER AU PANIER </a>
        </div>

          <div class="center-align button-box">
              <a class="btn-box style-font color-text" href="Produit.php" style="width:130px"> EN SAVOIR PLUS </a>
          </div>
    </div>


    <div class="concept">
      <img src="img/blood.png" >
    </div>

      <h2 class="style-font"> NOTRE CONCEPT</h2>

    <p class="pbox">
    Gamebox propose tous les mois des box de jeux et goodies sur diff??rents th??mes.<br>
    Chaque mois nous vous proposons une box contenant quatres jeux et deux goddies <br>
    Trois jeux et un goodies sont connus ?? l'avance et le quatri??me jeu ainsi que le dernier goodies <br>
    sont des myst??res. Les objets myst??res seront bien sur en lien avec le th??me du mois.
    </p>

    <?php require_once 'helpers/footer.php'; ?>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
