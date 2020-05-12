
<?php

// require_once('header.php');
// require_once('acceuil.php');
// require_once('footer.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventplat</title>
    <link rel="stylesheet" href="../materialize/css/materialize.min.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="./fontawesome5.13/css/all.min.css">
</head>
<body>
    
<!-- header -->

<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Event Plat</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Acceuil</a></li>
      </ul>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Calendrier</a></li>
      </ul>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Meilleur moment</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div class="acc">
<div>
<img src="../images/concert.jpg" alt="concert" class="img">
<center><h1>Bienvenue sur Eventplat</h1></center></div>

<div class="card small">
<div class="list-event">
                       <?php
                         foreach($list as $key => $value) {
                       ?>
            <div class="content-event">
              <div class="event-num"> Evenement N°: <?=$value->id_event?></div>
              <div class="event"><?=$value->nom_event?></div>
              <p class="organ">Organisé par : <?=$value->organisateur?> <br>
              <span>Du &nbsp &nbsp <?=$value->d_debut?> &nbsp &nbsp Au &nbsp &nbsp <?=$value->d_fin?></span>
              </p>
              <div> 
                <img src="<?=$value->photo?>" alt="" class="even-pic"> 
              </div>
              <div>
                <div class="descript"><?=$value->descript?></div>
              </div>
              <div>
                
                <a href="comment-even.php?id_event=<?= $value->id_event?>" type="button" class="btn btn-success pull-right btn"> Commenter </a>
              </div>
            </div>
            <?php
               }
            ?>
        </div>

</div>
</div>

<footer class="page-footer" id="foot">
          
          <div class="footer-copyright">
            <div class="container">
            © 2020 Copyright Simplon.co
            <a class="grey-text text-lighten-4 right" href="#!">A propos</a>
            </div>
          </div>
        </footer>
</body>
</html>