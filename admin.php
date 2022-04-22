<?php require_once 'helpers/config.php'; ?>
<?php require_once 'helpers/head.php'; ?>
<?php require_once 'content/navbar.php'; ?>
<?php
  $url="connexion.php";
  if(isset($_SESSION['user']['admin']) == 0){
    echo '<script type="text/javascript">';
    echo 'window.location.href="'.$url.'";';
    echo '</script>';
    echo '<noscript>';
    echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
    echo '</noscript>';
  }
  else{
      ?>
      <body>
        <div class="container center-align">
          <div class="divider"></div>
            <div class="section">
                <a class="waves-effect waves-light btn" href="theme.php">Theme</a>
                <p>Mettez à jour le Thème général du site</p>
            </div>
            <div class="divider"></div>
            <div class="section">
                <a class="waves-effect waves-light btn" href="user.php">User</a>
                <p>Vérifier la liste de tous les utilisateurs inscrit sur le site</p>
            </div>
            <div class="divider"></div>
            <div class="section">
              <a class="waves-effect waves-light btn" href="message.php">Messagerie</a>
              <p>Accéder à la Messagerie</p>
            </div>
        </div>
        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
      </body>
      <?php
    }
  ?>
