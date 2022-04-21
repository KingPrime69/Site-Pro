<!DOCTYPE html>
<html>
<?php require_once 'helpers/head.php'; ?>
  <body>
    <?php require_once 'content/navbar.php';?>
    <div class="row signin">
      <div class="center-align connect">
        <h3 class="col s12">S'inscrire</h3>
        <p class="little">Vous avez déja un compte ?<a href="#"> Se connecter</a></p>

        <form class="col s5 offset-s4" method="post" action="bdd/signin.php" enctype="multipart/form-data">
          <div class="row">
            <div class="input-field col s6">
              <input id="email" class="" type="text" name="email">
              <label for="email">Email</label>
            </div>
              <button class="btn red col s4 gg">Continuer avec Google</button>
          </div>
          <div class="row">
          <div class="input-field col s6">
            <input id="password" class="" type="password" name="password">
            <label for="password">Password</label>
          </div>
          <button class="btn blue darken-4 col s4 gg">Continuer avec Facebook</button>
          </div>
          <div class="row">
          <div class="input-field col s6">
            <input id="password" class="" type="password" name="Conf_password">
            <label for="password">Confirm Password</label>
          </div>
          <button class="btn blue col s4 gg">Continuer avec Paypal</button>
        </div>
        <button class="center-align col s3 btn btnCo waves-effect white gg btnText" type="submit">S'inscrire</button>
        </form>
      </div>
    </div>

    <div class="row login">
      <div class="center-align">
        <h3 class="col s12">Se connecter</h3>
        <p class="little">Vous n'avez pas encore de compte ?<a href="#"> S'inscrire</a></p>
      </div>

      <form class="col s5 offset-s4" method="post" action="bdd/login.php" enctype="multipart/form-data">
        <div class="row">
          <div class="input-field col s6">
            <input id="username" class="" type="text" name="email">
            <label for="username">email</label>
          </div>
          <button class="btn red col s4 gg">Continuer avec Google</button>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <input id="password" class="" type="password" name="password">
            <label for="password">Password</label>
          </div>
          <button class="btn blue darken-4 col s4 gg">Continuer avec Facebook</button>
        </div>
        <div class="row">
        <button class="center-align col s3 btn btnCo waves-effect white gg btnText">Se connecter</button>
        <button class="btn blue col s4 offset-s3 gg">Continuer avec Paypal</button>
      </div>
      </form>
    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
