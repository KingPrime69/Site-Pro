<?php require_once 'helpers/config.php'; ?>
<html>

  <?php require_once 'helpers/head.php'; ?>
  <body>
    <?php require_once 'content/navbar.php'; ?>

    <div class="box bg-black no-margin">
      <h1 class="style-font no-margin color-text"> LA GAMEBOX D'OCTOBRE SUR LE THEME </h1>

      <h2 class="style-font big color-text">HALLOWEEN</h2>

      <div class="row center-align">
<<<<<<< HEAD

          <div class="col l2  s6">
            <a href="Produit.php"> <img src="img/lof.jpg"></a>
          </div>

          <div class="col l2 s6">
            <a href="Produit.php"> <img src="img/pkj.jpg"> </a>
          </div>

          <div class="col l2 s6">
           <a href="Produit.php"> <img src="img/dbd.jpg"></a>
         </div>
          <div class="col l2 s6 ">
            <a href="Produit.php"> <img src="img/mystery.PNG" width="271px" height="377px"></a>
          </div>

          <div class="col l2 s6 ">
            <a href="Produit.php"> <img src="img/dbdfig2.PNG" width="271px" height="377px"></a>
          </div>

          <div class="col l2 s6 ">
            <a href="Produit.php"> <img src="img/mystery.PNG" width="271px" height="377px"></a>
=======
          <div class="col l2  s6 no-margin imge">
            <a href="Produit.php"> <img src="<?php echo $live['Article-1']; ?>" ></a>
          </div>

          <div class="col l2 s6 no-margin imge">
            <a href="Produit.php"> <img src="<?php echo $live['Article-2']; ?>" > </a>
          </div>

          <div class="col l2 s6 no-margin imge">
           <a href="Produit.php"> <img src="<?php echo $live['Article-3']; ?>" ></a>
         </div>
          <div class="col l2 s6 no-margin imge">
            <a href="Produit.php"> <img src="<?php echo $live['Article-4']; ?>" width="271px" height="377px"></a>
          </div>

          <div class="col l2 s6 no-margin imge">
            <a href="Produit.php"> <img src="<?php echo $live['Article-5']; ?>" width="271px" height="377px" ></a>
          </div>

          <div class="col l2 s6 no-margin imge">
            <a href="Produit.php"> <img src="<?php echo $live['Article-6']; ?>" width="271px" height="377px"></a>
>>>>>>> 44305be9f56e081e6d79be4cca1608a37ad38896
          </div>
      </div>

        <div class="center-align button-box">
            <a class="btn-box style-font color-text" href="Achat.php"> AJOUTER AU PANIER </a>
        </div>

          <div class="center-align button-box">
              <a class="btn-box style-font color-text" href="Produit.php" style="width:130px"> EN SAVOIR PLUS </a>
          </div>
    </div>


    <div class="concept">

      <div class="center-align">
        <img src="img/blood.png" >
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
