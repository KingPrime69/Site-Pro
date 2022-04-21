<?php require_once 'helpers/config.php'; ?>
<html>
  <?php require_once 'helpers/head.php'; ?>
  <body>
      <?php require_once 'content/navbar.php'; ?>
<<<<<<< HEAD

      <div class="bodyform">
      <div class="contactez-nous">
        <h1>Contactez-nous</h1>
        <p>Un problème, une question ? N’hésitez pas à utiliser ce formulaire pour prendre contact avec nous !</p>
        <form action="/page-traitement-donnees" method="post">
          <div>
            <label for="nom">Votre nom</label>
            <input type="text" id="nom" name="nom" placeholder="Martin" required>
          </div>
          <div>
            <label for="email">Votre e-mail</label>
            <input type="email" id="email" name="email" placeholder="monadresse@mail.com" required>
          </div>
          <div>
            <label for="sujet">Quel est le sujet de votre message ?</label>
            <select name="sujet" id="sujet" required>
                <option value="" disabled selected hidden>Choisissez le sujet de votre message</option>
                <option value="probleme-compte">Problème avec mon compte</option>
                <option value="question-produit">Question à propos d’un produit</option>
                <option value="suivi-commande">Suivi de ma commande</option>
                <option value="autre">Autre...</option>
             </select>
          </div>
          <div>
            <label for="message">Votre message</label>
            <textarea id="message" name="message" placeholder="Bonjour, je vous contacte car...." required></textarea>
          </div>
          <div>
            <button type="submit">Envoyer mon message</button>
          </div>
        </form>
      </div>
=======
      <div class="bodyform">
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
              <p><?php
              if(empty($_SESSION['user']['email'])){
                echo "example@email.com";
              }
              else {
                ?> <p> <?php echo $_SESSION['user']['email']; ?> </p> <?php
              }
              ?></p>
            </div>
            <div>
              <label for="nom">Objet</label>
              <input type="text" id="nom" name="object" required>
            </div>
            <div>
              <label for="message">Votre message</label>
              <textarea id="message" name="texte" required></textarea>
            </div>
            <div>
              <button class="btn waves-effect waves-teal" type="submit">Envoyer mon message</button>
            </div>
          </form>
>>>>>>> 44305be9f56e081e6d79be4cca1608a37ad38896
        </div>
      </div>

<?php require_once 'helpers/footer.php'; ?>
  </body>
</html>
