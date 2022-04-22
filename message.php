<?php require_once 'helpers/config.php'; ?>
<?php require_once 'helpers/head.php'; ?>
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
  <?php
    require_once 'content/navbar.php';
    $sql = "SELECT * FROM contact ORDER BY `treaty` ASC";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $data = $pre->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <h2>Liste des Messages</h2>
    <div class="center-align">
      <a href="admin.php">Page admin</a>
    </div>
    <?php
    foreach ($data as $message):
      ?>
      <div class="row">
        <form class="" action="detailMessage.php" method="post">
          <p class="col"><?php echo $message['id']; ?> :</p>
          <input type="hidden" name="id" value="<?php echo $message['id']; ?>">
          <p class="col l1">
            <?php
              if ($message['treaty'] == 1) {
                echo "Traité";
              }
              else{
                echo "Non traité";
              }
            ?>
          </p>
          <h5 class="col l2">Mail: <?php echo $message['email']; ?></h5>
          <h5 class="col l2">Objet: <?php echo $message['object']; ?></h5>
          <input type="hidden" name="email" value="<?php echo $message['email']; ?>">
          <input type="hidden" name="name" value="<?php echo $message['name']; ?>">
          <input type="hidden" name="object" value="<?php echo $message['object']; ?>">
          <input type="hidden" name="text" value="<?php echo $message['text']; ?>">
          <button class="btn waves-effect waves-light col l1 align" type="submit" name="action">voir plus
            <i class="material-icons right">send</i>
          </button>
        </form>
        <form class="" action="treaty.php" method="post">
          <input type="hidden" name="id" value="<?php echo $message['id']; ?>">
          <button class="btn waves-effect waves-light col l1 align" type="submit" name="action">Traité
            <i class="material-icons right">send</i>
          </button>
        </form>
        <form class="" action="untreaty.php" method="post">
          <input type="hidden" name="id" value="<?php echo $message['id']; ?>">
          <button class="btn waves-effect waves-light col l1 align" type="submit" name="action">Non traité
            <i class="material-icons right">send</i>
          </button>
        </form>
      </div>
      <?php endforeach; ?>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</body>
<?php
}
?>
