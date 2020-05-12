
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

<div class="card">
    <div class="card-content">
      <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
    </div>
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab"><a href="#test4">Test 1</a></li>
        <li class="tab"><a class="active" href="#test5">Test 2</a></li>
        <li class="tab"><a href="#test6">Test 3</a></li>
      </ul>
    </div>
    <div class="card-content grey lighten-4">
      <div id="test4">Test 1</div>
      <div id="test5">Test 2</div>
      <div id="test6">Test 3</div>
    </div>
  </div>

<div class="card small">

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