<?php


	session_start();
	if(@$_SESSION["autoriser"]!="oui"){
		header("location:log.php");
		exit();
	}
?>
<!DOCYTPE html>
<html>
	<head>
	<link rel="stylesheet" href="../style/bootstrap4/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
	</head>
	<body>
		<header>
			Espace Administrateur
			
			<a href="../database/deconnexion.php">Quitter la session</a>
		</header>
		<h1>
		<?php 
			echo (date("H")<18)?("Bonjour"):("Bonsoir");
		?>
		
		</h1>


<form method="post" action="../controlleurs/EnregistrerEven.php" enctype="multipart/form-data" data-toggle="validator" id="frm" >
<h2> <center > Enregistrement d'un Evénement</center></h2> <br>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Nom</label>
              <input type="text" name="nom" class="form-control" id="inputnom" >   
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">Date de début</label>
              <input type="date"name="date_de_debut" class="form-control" id="inputdate_de_naissance" required>
              </div>
          </div>
          
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Date de Fin</label>
              <input type="date"name="date_de_fin" class="form-control" id="inputdate_de_naissance" required>
              </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">Organisateur</label>
              <input type="text" name="organisateur" class="form-control" id="inputville" >
            </div>
          </div>
          <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
  </div>
          <div class="panel-footer">
                  <input type="submit" class="btn btn-success m-2" >
                  <input type="reset" class="btn btn btn-danger m-2" value="Reinitialiser">
        </div>
        </div>
     </form> 
	</body>
</html>