<?php require_once 'helpers/head.php'; ?>
<body>
  <?php
    require_once 'content/navbar.php';
    $sql = "SELECT * FROM contact";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $data = $pre->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <h2>Liste des utilisateur</h2>
    <?php
    foreach ($data as $user):
      ?>
      <div class="row">
      <form class="" action="modifUser.php" method="post">
          <p class="col"><?php echo $user['id']; ?> :</p>
          <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
          <input type="email" name="email" value="<?php echo $user['email']; ?>" class="col l4">
          <button class="btn waves-effect waves-light col l1 align" type="submit" name="action">répondre
            <i class="material-icons right">send</i>
          </button>
      </form>
      </div>
      <?php endforeach; ?>
      <div class="center-align">
      </div>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</body>
