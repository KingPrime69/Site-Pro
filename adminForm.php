<?php
	require_once "helpers/config.php";
  require_once "helpers/head.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a id="button">Click</a>
    <script type="text/javascript">
      $(function(){
        $("#button").on("click", function(){
          $(".test").css({"background-color":"#fff"});
          $(".test").css({"color":"#000"});
        });
      });
    </script>
    <h1 class="test">test</h1>
  </body>
</html>
