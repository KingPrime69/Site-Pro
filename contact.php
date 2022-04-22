<?php require_once 'helpers/config.php'; ?>
<html>
  <?php require_once 'helpers/head.php'; ?>
  <body>
      <?php require_once 'content/navbar.php'; ?>



      <div class="bodyform backgroundc">
        <div class="contactez-nous">
          <h1>Contactez-nous</h1>
          <p>Un problème, une question ? N’hésitez pas à utiliser ce formulaire pour prendre contact avec nous !</p>
          <form action="send.php" method="post" class="formContact">
            <div>
              <label for="nom">Votre nom</label>
              <input type="text" id="nom" name="name" required>
            </div>
            <div>
              <input type="hidden" id="email" name="email" value="<?php if(isset($_SESSION['user'])){echo $_SESSION['user']['email'];} ?>">
              <p>
                <label for="email">Votre e-mail</label>
                <input type="email" id="email" name="email" placeholder="monadresse@mail.com" required>
              </p>
            </div>
            <div>
              <label for="nom">Objet</label>
              <input type="text" id="nom" name="object" required>
            </div>
            <div>
              <textarea class="message" id="message" name="texte" required></textarea>
            </div>
            <div>
              <button class="btn waves-effect waves-teal" type="submit">Envoyer mon message</button>
            </div>
          </form>
        </div>
      </div>


  </body>
  <?php require_once 'helpers/footer.php'; ?>
</html>
