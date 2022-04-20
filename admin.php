  <?php require_once 'helpers/head.php'; ?>
  <body>
    <h3>Modifier la page principale</h3>
    <div class="row">
      <form class="col s12" method="post" action="adminForm.php">
        <div class="row">
          <div class="input-field col l3">
            <input placeholder="Input Hexadecimal" id="theme" type="text" class="" name="theme">
            <label for="textColor">Theme (HALLOWEEN)</label>
          </div>
          <div class="input-field col l3">
            <input placeholder="Input Hexadecimal" id="color" type="text" class="" name="color">
            <label for="textColor">Text Color (#780404)</label>
          </div>
          <div class="input-field col l3">
            <input placeholder="Input Hexadecimal" id="color" type="text" class="" name="style">
            <label for="textColor">Style Font (Rubik Wet Paint, cursive)</label>
          </div>
          <div class="input-field col s1">
            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
              <i class="material-icons right">send</i>
            </button>
          </div>
        </div>
      </form>
    </div>

    <h3>Choisir le thème</h3>
    <div class="row">
      <form class="col s12" method="post" action="ChangeTheme.php">
        <div class="row">
          <div class="input-field col l3">
            <input placeholder="Input Hexadecimal" id="theme" type="text" class="" name="theme">
            <label for="textColor">Theme (HALLOWEEN)</label>
          </div>
          <div class="input-field col s1">
            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
              <i class="material-icons right">send</i>
            </button>
          </div>
        </div>
      </form>
    </div>


    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
