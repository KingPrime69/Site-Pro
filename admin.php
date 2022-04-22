<<<<<<< HEAD
  <?php require_once 'helpers/head.php'; ?>
    <?php require_once 'content/navbar.php'; ?>
<body>
  <div class="container center-align">
    <div class="divider"></div>
    <div class="section">
      <a class="waves-effect waves-light btn" href="theme.php">Theme</a>
    </div>
    <div class="divider"></div>
    <div class="section">
      <a class="waves-effect waves-light btn" href="user.php">User</a>
    </div>
    <div class="divider"></div>
    <div class="section">
      <a class="waves-effect waves-light btn" href="message.php">Messagerie</a>
    </div>
  </div>
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</body>
=======
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
        <a class="waves-effect waves-light btn" href="theme.php">Theme</a>
        <a class="waves-effect waves-light btn" href="user.php">User</a>
        <a class="waves-effect waves-light btn" href="message.php">Messagerie</a>
        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
      </body>
      <?php
    }
  ?>
>>>>>>> 5a92ba7c3df9020282f2b0155b8f266945277731
