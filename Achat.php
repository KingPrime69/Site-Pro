<?php require_once 'helpers\config.php'; ?>
<html>
  <head>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/Achat.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>
    <?php require_once 'content/navbar.php'; ?>

    <div class="container">
      <div class="row">
        <div class="col s6">
          <h2 class="center-align">Selectionner un moyen de paiement</h3>
        </div>

        <div class="col s6">
          <h2 class="center-align">Récapitulatif</h3>
        </div>

      </div>

      <div class="row">
        <h3><i class="medium material-icons left">lens</i>Carte Bancaire</h3>
          <div class="Adresse row">
            <h4 class="col l2">Adresse de facturation :</h4>
            <a class="waves-effect waves-light btn col l2">button</a>
          </div>

          <form class="col s6">
            <div class="row">
              <div class="input-field col s12">
                <input id="Numéro_de_Carte" type="text" class="validate">
                <label for="Numéro_de_Carte">Numéro de carte</label>
              </div>

            </div>

            <div class="row">
              <div class="input-field col s6">
                <input id="Date" type="text" class="validate">
                <label for="Date">Date d'expiration</label>
              </div>

              <div class="input-field col s6">
                <input id="Cryptogramme" type="text" class="validate">
                <label for="Cryptogramme">Cryptogramme</label>
              </div>

            </div>

            <div class="row">
              <div class="input-field col s12">
                <input id="Nom" type="text" class="validate">
                <label for="Nom">Nom du Titulaire de la carte</label>
              </div>
            </div>
          </form>
        </div>
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
