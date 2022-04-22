<?php
  $destinataire = $_POST['email'];
  $objet = "Résolution payement";;
  $message = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
  $headers = "From: test@domaine.fr";
  $headers = "Si vous avez plus de questions ou que la réponse ne vous convient pas contacter aide@domaine.fr";
  if (mail($destinataire, $objet, $message, $headers)) // Envoi du message
  {
      echo 'Votre message a bien été envoyé ';
  }
  else // Non envoyé
  {
      echo "Votre message n'a pas pu être envoyé";
  }

  header('Location:../message.php');
?>
