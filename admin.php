  <?php require_once 'helpers/head.php'; ?>
  <body>
    <?php
    require_once 'helpers/config.php';
    require_once 'content/navbar.php';
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
    <h3>Modifier la page principale</h3>
    <div class="row">
      <form class="col s12" method="post" action="adminForm.php">
        <div class="row">
          <div class="input-field col l3">
            <input placeholder="Input Hexadecimal" id="theme" type="text" class="" name="theme">
            <label for="textColor">Theme (<?php echo $live['theme']; ?>)</label>
          </div>
          <div class="input-field col l3">
            <input placeholder="Input Hexadecimal" id="color" type="text" class="" name="color">
            <label for="textColor">Text Color (<?php echo $live['color-font']; ?>)</label>
          </div>
          <div class="input-field col l3">
            <input placeholder="Input Hexadecimal" id="color" type="text" class="" name="style">
            <label for="textColor">Style Font (<?php echo $live['style-font']; ?>)</label>
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
            <label for="textColor">Theme (<?php echo $live['theme']; ?>)</label>
          </div>
          <div class="input-field col s1">
            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
              <i class="material-icons right">send</i>
            </button>
          </div>
        </div>
      </form>
    </div>
    <?php endforeach; ?>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
