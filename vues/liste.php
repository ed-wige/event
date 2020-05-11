<!Doctype html>
<html>
  <header>
  <meta charset='utf-8'>
  <title></title>
  <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">


  </header>
  <body>
  <div class="card text-center">
       
    
        <div class="card-body">
<?php
      if(isset($_GET['rep']))
      {
        echo '<h5>'.$_GET['rep'].'</h5>';
      }
?>
    <table class="table table-hover">
    <thead>
    <tr>
      <th scope="col">Supprimer</th>
      <th scope="col">Nom</th>
      <th scope="col">Date de début</th>
      <th scope="col">Date de fin</th>
      <th scope="col">Organisateur</th>
      <th scope="col">Description</th>
      <th scope="col">Details</th>
    </tr>
  </thead>
  <tbody>
  <?php
        foreach ($events as $event) {
        ?>
    <tr>
        <td><a href="supprimer.php?id=<?php echo $event['id'];?>" class="text-danger">&#10060 </a></td>
        <td><?php echo $event['id'];?></td>
        <td><?php echo $event['nom'];?></td>
        <td><?php echo $event['date_de_debut'];?></td>
        <td><?php echo $event['date_de_fin'];?></td>
        <td><?php echo $event['organisateur'];?></td>
         <td><?php echo $event['description'];?></td>
        <td><a href="detail.php?id=<?php echo $event['id'];?>">detail</a></td>
    </tr>
    <?php
        }
        ?> 
  </tbody>
  </table>
  </div>
   
        <!-- <?php
            // require('footer.php')
        ?> -->
    </div> 
  </body>
</html>