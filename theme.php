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
  <h3>Crée un thème</h3>
  <div class="row">
    <form class="col s12" method="post" action="adminForm.php">
      <div class="row">
        <div class="input-field col l3">
          <input placeholder="Theme actuelle: <?php echo $live['theme']; ?>" id="theme" type="text" class="" name="theme">
          <label for="textColor">Theme</label>
        </div>
        <div class="input-field col l3">
          <input placeholder="Couleur actuelle: <?php echo $live['color-font']; ?>" id="color" type="text" class="" name="color">
          <label for="textColor">Text Color</label>
        </div>
        <div class="input-field col l6">
          <input placeholder="Titre actuelle: <?php echo $live['title']; ?>" id="color" type="text" class="" name="title">
          <label for="Titre">Titre</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col l3">
          <input placeholder="Font actuelle: <?php echo $live['style-font']; ?>" id="color" type="text" class="" name="style">
          <label for="textColor">Style Font</label>
        </div>
        <div class="input-field col l3">
          <input placeholder="lien google font" id="color" type="text" class="" name="link">
          <label for="textColor">Link Font</label>
        </div>
        <div class="input-field col s1">
          <button class="btn waves-effect waves-light" type="submit" name="action">Créer
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
          <input placeholder="Theme actuelle: <?php echo $live['theme']; ?>" id="theme" type="text" class="" name="theme">
          <label for="textColor">Theme</label>
        </div>
        <div class="input-field col s1">
          <button class="btn waves-effect waves-light" type="submit" name="action">Changer
            <i class="material-icons right">send</i>
          </button>
        </div>
      </div>
    </form>
  </div>
  <h3>Modifier un thème</h3>
  <div class="row">
    <form class="col s12" method="post" action="modifTheme.php">
      <div class="row">
        <div class="input-field col l3">
          <input placeholder="mettre le thème a modifer" id="theme" type="text" class="" name="theme">
          <label for="textColor">Theme</label>
        </div>
        <div class="input-field col l3">
          <input placeholder="Couleur actuelle: <?php echo $live['color-font']; ?>" id="color" type="text" class="" name="color">
          <label for="textColor">Text Color</label>
        </div>
        <div class="input-field col l6">
          <input placeholder="Titre actuelle: <?php echo $live['title']; ?>" id="color" type="text" class="" name="title">
          <label for="Titre">Titre</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col l3">
          <input placeholder="Font actuelle: <?php echo $live['style-font']; ?>" id="color" type="text" class="" name="style">
          <label for="textColor">Style Font</label>
        </div>
        <div class="input-field col l3">
          <input placeholder="lien google font" id="color" type="text" class="" name="link">
          <label for="textColor">Link Font</label>
        </div>
        <div class="input-field col s1">
          <button class="btn waves-effect waves-light" type="submit" name="action">Créer
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
