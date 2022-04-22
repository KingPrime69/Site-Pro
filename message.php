<?php require_once 'helpers/head.php'; ?>
<body>
  <?php
    require_once 'content/navbar.php';
    $sql = "SELECT * FROM contact";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $data = $pre->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <h2>Liste des Messages</h2>
    <?php
    foreach ($data as $message):
      ?>
      <div class="row">
        <form class="" action="detailMessage.php" method="post">
          <p class="col"><?php echo $message['id']; ?> :</p>
          <input type="hidden" name="id" value="<?php echo $message['id']; ?>">
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
        <button class="btn waves-effect waves-light col l1 align" type="submit" name="action">Traité
          <i class="material-icons right">send</i>
        </button>
      </div>
      <?php endforeach; ?>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</body>
