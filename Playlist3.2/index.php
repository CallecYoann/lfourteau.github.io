<!-- Première page appelée qui permet de se connecter ou de s'inscrire -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
        width: 70%;
        margin: auto;
    }
    </style>
  </head>

  <body>
    <header>
      <!-- Crétion d'une navbar spécifique à la page d'index (différente de "navbar.php") -->
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Yolu's Ultimate Playlist</a>
          </div>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="connectionForm.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <li><a href="/inscription/inscription.php"> S'inscrire</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Appel du carroussel -->
    <div id = "carroussel">
      <h1>Actualité musicale</h1>
      <?php
      include ('carrousel.php');
      ?><!-- Page d'accueil contenant le login et le bouton envoyant au signin-->
    </div>


  </body>
</html>
