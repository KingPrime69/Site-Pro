<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>
    <?php require_once 'content/navbar.php';?>
    <div class="row signin">
      <div class="center-align connect">
        <h3 class="col s12">S'inscrire</h3>
        <p class="little">Vous avez déja un compte ?<a href="#">Se connecter</a></p>

        <form class="col s5 offset-s4">
            <div class="row">
              <div class="input-field col s6">
                <input id="email" type="email" class="validate">
                <label for="email">Email</label>
              </div>
                <button class="btn red col s4 gg">Continuer avec Google</button>
            </div>
            <div class="row">
            <div class="input-field col s6">
              <input id="password" type="password" class="validate">
              <label for="password">Password</label>
            </div>
            <button class="btn blue darken-4 col s4 gg">Continuer avec Facebook</button>
          </div>
          <div class="row">
          <div class="input-field col s6">
            <input id="password" type="password" class="validate">
            <label for="password">Confirm Password</label>
          </div>
          <button class="btn blue col s4 gg">Continuer avec Paypal</button>
        </div>
        <button class="center-align col s3 btn btnCo waves-effect white">S'inscrire</button>
        </form>
      </div>
    </div>

    <div class="row login">
      <div class="center-align">
        <h3 class="col s12">Se connecter</h3>
        <p class="little">Vous avez déja un compte ?<a href="">S'inscrire</a></p>
      </div>

      <form class="col s5 offset-s4">
          <div class="row">
            <div class="input-field col s6">
              <input id="email" type="email" class="validate">
              <label for="email">Email</label>
            </div>
              <button class="btn red col s4 gg">Continuer avec Google</button>
          </div>
          <div class="row">
          <div class="input-field col s6">
            <input id="password" type="password" class="validate">
            <label for="password">Password</label>
          </div>
          <button class="btn blue darken-4 col s4 gg">Continuer avec Facebook</button>
        </div>
        <div class="row">
        <div class="input-field col s6">
          <input id="password" type="password" class="validate">
          <label for="password">Confirm Password</label>
        </div>
        <button class="btn blue col s4 gg">Continuer avec Paypal</button>
      </div>
      <button class="center-align col s3 btn btnCo waves-effect white">Se connecter</button>
      </form>
    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
