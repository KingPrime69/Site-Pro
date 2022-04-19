<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <?php require_once 'helpers/config.php'; ?>
    <?php require_once 'helpers/head.php'; ?>
  </head>
  <body>
    <div class="row">
      <form method="post" action="adminForm.php" enctype="multipart/form-data" class="col s12">
        <div class="row">
          <div class="input-field col s6">
            <input placeholder="Input Hexadecimal" id="textColor" type="text" class="validate" name="textColor">
            <label for="textColor">Text Color</label>
          </div>
          <div class="input-field col s6">
            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
              <i class="material-icons right">send</i>
            </button>
          </div>
      </form>
    </div>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
