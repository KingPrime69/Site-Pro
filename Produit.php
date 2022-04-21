<?php require_once 'helpers\config.php'; ?>
<html>
  <head>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/Produit.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>
    <?php require_once 'content/navbar.php'; ?>

    <h1 class="center-align">Contenu de la box sur le theme <br>Hallowwen</h1>

      <div class="LayersOfFears row">
        <img src="img/lof.jpg" class=" col l2 offset-l3">
        <div class="texte1 left-align col l4">
          <p>Layers of Fear est un jeu vidéo d'horreur psychologique développé et édité par le studio de développement polonais Bloober Team, sorti sur Microsoft Windows, OS X, Linux, PlayStation 4 et Xbox One le 16 février 2016 dans le monde entier.</p>
        </div>
      </div>
      <div class="PumpkinJack row">
        <div class="texte2 left-align col l4 offset-l3">
          <p>Pumpkin Jack est un jeu de plateforme 3D amusant et effrayant dans lequel vous incarnez Jack, le mythique seigneur à tête de citrouille ! Plongez au cœur d'une aventure épique à travers différents paysages fantastiques et aidez le Mal à triompher du Bien !</p>
        </div>
        <img src="img/pkj.jpg" class=" col l2">
      </div>
      <div class="DeadByDead row">
        <img src="img/dbd.jpg" class="left col l2 offset-l3">
        <div class="texte3 left-align col l4 ">
          <p>Dead by Daylight est un jeu vidéo de type survival horror, multijoueur,développé par Behaviour Interactive et édité par Starbreeze Studios,<br>
           sorti en 2016 sur Windows, PlayStation 4 et Xbox One. Initialement annoncé sur Nintendo Switch pour le 31 octobre 2019, la date de sortie a été avancée au 24 septembre 2019</p>
        </div>
        </div>
        <div class="MysteryGame row">
          <p class="center-align col l4 offset-l3">Jeu Mystère</p>
          <img src="img/mystery.PNG" class=" col l2 ">
        </div>
        <div class="Goodies1 row">
          <img src="img/dbdfig.jpg" class="col l2 offset-l3">
          <p class="center-align">Figurine Dead by Daylight Edition Limitée</p>
        </div>

    <div class="center-align">
      <a class="btn" href="Achat.php">AJOUER AU PANIER</a>
    </div>

    <footer class="page-footer black">
             <div class="container">
               <div class="row">
                 <div class="col l6 s12">
                   <h5 class="white-text">NOS BOX</h5>
                   <li><a class="grey-text text-lighten-3" href="#!">La box du mois</a></li>
                   <li><a class="grey-text text-lighten-3" href="#!">Notre concept</a></li>
                 </div>
                 <div class="col l4 offset-l2 s12">
                   <h5 class="white-text">AIDE</h5>
                   <ul>
                     <li><a class="grey-text text-lighten-3" href="#!">Mentions légales</a></li>
                     <li><a class="grey-text text-lighten-3" href="#!">Contact</a></li>
                   </ul>
                 </div>
               </div>
             </div>
             <div class="footer-copyright">
               <div class="container">
               © 2014 Copyright Text
               <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
               </div>
             </div>
      </footer>


    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
