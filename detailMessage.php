<?php require_once 'helpers/config.php'; ?>
<html>
  <?php require_once 'helpers/head.php'; ?>
  <body>
      <?php require_once 'content/navbar.php'; ?>
      <div class="row">
            <div class="col s4 offset-s4">
              <label for="nom">Nom</label>
              <h5><?php echo $_POST['name']; ?></h5>
            </div>
            <div class="col s4 offset-s4">
              <label for="nom">Email</label>
              <h5><?php echo $_POST['email']; ?></h5>
            </div>
            <div class="col s4 offset-s4">
              <label for="nom">Objet</label>
              <h5><?php echo $_POST['object']; ?></h5>
            </div>
            <div class="col s4 offset-s4">
              <label for="message">Contenu</label>
              <p> <?php echo $_POST['text']; ?> </p>
            </div>
          </div>
          <div class="row">
            <form class="col offset-l4" action="reponse/repExp1.php" method="post">
              <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
              <input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
              <input type="hidden" name="object" value="<?php echo $_POST['object']; ?>">
              <input type="hidden" name="text" value="<?php echo $_POST['text']; ?>">
              <button class="btn waves-effect waves-light align" type="submit" name="action">Réponse 1
                <i class="material-icons right">send</i>
              </button>
            </form>
            <form class="col" action="reponse/repExp2.php" method="post">
              <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
              <input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
              <input type="hidden" name="object" value="<?php echo $_POST['object']; ?>">
              <input type="hidden" name="text" value="<?php echo $_POST['text']; ?>">
              <button class="btn waves-effect waves-light align" type="submit" name="action">Réponse 2
                <i class="material-icons right">send</i>
              </button>
            </form>
            <form class="col" action="reponse/repExp3.php" method="post">
              <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
              <input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
              <input type="hidden" name="object" value="<?php echo $_POST['object']; ?>">
              <input type="hidden" name="text" value="<?php echo $_POST['text']; ?>">
              <button class="btn waves-effect waves-light align" type="submit" name="action">Réponse 3
                <i class="material-icons right">send</i>
              </button>
            </form>
        </div>
  </body>
</html>
