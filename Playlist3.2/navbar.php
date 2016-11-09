<!-- Crétion d'une navbar qui sera appellée sur toutes les pages du site une fois connecté -->
<?php session_start();
require ('connectBdd.php');
?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Yolu's Ultimate Playlist</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="">My playlists
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <!-- Permet de récupérer le nom des playlistes dans la BDD et de les ajouter au dropdown menu de la navbar -->
          <?php
          $playlists = $pdo->prepare("SELECT name, id FROM playlists WHERE user_id = :userid");
          $playlists->bindValue('userid', $_SESSION['id']);
          $playlists->execute();

          while ($playlist = $playlists->fetch()) {
            ?>
            <!-- Quand on clique sur le nom d'une playlist, envoie dans l'URL l'id de la playlist qui sera réccupérer pour génrer une variable de session qui permet de savoir dans quelle playlist on se trouve -->
            <li><a href="/myPlaylists/createSESSION_playlistId.php?playlistId=<?php echo $playlist['id']?>"> <?php echo $playlist['name'] ?></a></li>
            <?php
          }
          ?>
        </ul>
      </li>
      <!-- Bouton de création d'une nouvelle playlist -->
      <li><a href="/createPlaylist/playlistForm.php">Create a new playlist</a>
      </li>
      <!-- Bouton d'ajout d'un nouveau titre -->
      <li><a href="/addTrack/addForm.php">Add a track</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <!-- Affiche le nom de l'utilisateur réccupérer par la variable de session -->
      <li><a href="#"><span class="glyphicon glyphicon-user"></span><?php echo ' Hello ' .$_SESSION['pseudo']; ?></a></li>
      <!-- Bouton de deconnexion -->
      <li><a href="/deconnexion.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
