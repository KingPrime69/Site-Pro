<?php require_once 'helpers\config.php'; ?>
<html>

  <?php require_once 'helpers/head.php'; ?>
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
        <div class="infoCarte col l7">
          <h3><i class="medium material-icons left">lens</i>Carte Bancaire</h3>
            <div class="Adresse row">
              <h4 class="col l2">Adresse de facturation :</h4>
              <a class="waves-effect waves-light modifbtn col l2">MODIFIER</a>
            </div>

            <form class="infoCarte2 col s6">
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
          <div class="Recap col l4 offset-l1">
            <h3>Panier</h3>
            <p class="Achat"><i class="small material-icons left">lens</i>Gamebox d'octobre</p>
            <h3>Livraison</h3>
            <p>Livraison en 3 jours <br>

            Livraison à domicile <br>
            Mr VERNILLET Robin <br>
            54 bis chemin de la côte <br>
            69350 Brignais</p>
            <h3>TOTAL</h3>
          </div>
        </div>
        <div class="row">
          <div class="Paypalbtn col l4 valign-wrapper">
            <a class="Pay waves-effect waves-light"><i class="small material-icons left">radio_button_unchecked</i>Paypal       </a>
            <i class="right-align"><img src="img/Paypal.png" class="Paypal circle right"></i>
          </div>
        </div>
        <div class="row">
          <div class="Paypalbtn col l4 valign-wrapper">
            <a class="Pay waves-effect waves-light"><i class="small material-icons left">radio_button_unchecked</i>Cryptomonnaie (Bitcoin)</a>
            <i class="right-align"><img src="img/Paypal.png" class="Paypal circle right"></i>
          </div>
        </div>
      </div>


    <?php require_once 'helpers/footer.php'; ?>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
