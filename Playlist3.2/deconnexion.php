<!-- Détruit les variables de session quand on se déconnecte -->
<?php
session_start();
session_destroy (); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Deconnexion</title>
  </head>
  <body>
    <script type="text/javascript">

    alert("You have been logged out successfully.");
    window.location = "index.php";

  </script>

  </body>
</html>
