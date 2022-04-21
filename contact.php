<?php require_once 'helpers/config.php'; ?>
<html>
  <?php require_once 'helpers/head.php'; ?>
  <body>
      <?php require_once 'content/navbar.php'; ?>
      <div class="bodyform">


      <div class="contactez-nous">
        <h1>Contactez-nous</h1>
        <p>Un problème, une question ? N’hésitez pas à utiliser ce formulaire pour prendre contact avec nous !</p>
        <form action="/page-traitement-donnees" method="post" class="formContact">
          <div>
            <label for="nom">Votre nom</label>
            <input type="text" id="nom" name="nom" placeholder="Martin" required>
          </div>
          <div>
            <label for="email">Votre e-mail</label>
            <input type="hidden" id="email" name="email" placeholder="monadresse@mail.com" required>
            <p></p>
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
        </div>

<?php require_once 'helpers/footer.php'; ?>
  </body>
</html>
