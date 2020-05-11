<?php


header("location:../controlleurs/VerifierAdmin.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="../assets/materialize.min.css">
    <script src="../assets/materialize.min.js"></script>
    <link rel="stylesheet" href="../assets/style.css">
</head>

    <body ng-app="mainModule" ng-controller="mainController"  style="background-color:white;">
        <center><h1>S'inscrire</h1></center> 
        <div id="login-page" class="row"  style="background-color:transparent"  >
            <div class="col s12 z-depth-6 card-panel" style="background-color:rgb(77, 60, 145);">
            <form class="login-form" method="POST" action="../controlleurs/createAdmin.php">
                
                <div class="row">
                    <div class="input-field col s12">
                      <i class="material-icons prefix">person_outline</i>
                      <input class="validate" id="nom" type="text" name="nom"> 
                      <label for="Nom" data-error="wrong" data-success="right">Nom</label>
                    </div>
                </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <i class="material-icons prefix">person_outline</i>
                      <input class="validate" id="prenom" type="text" name="prenom">
                      <label for="Prenom" data-error="wrong" data-success="right">Prenom</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <i class="material-icons prefix">mail_outline</i>
                      <input class="validate" id="email" type="email" name="email">
                      <label for="email" data-error="wrong" data-success="right">Email</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <i class="material-icons prefix">person_outline</i>
                      <input class="validate" id="username" type="text" name="username">
                      <label for="username" data-error="wrong" data-success="right">username</label>
                    </div>
                  </div>
                <div class="row">
                  <div class="input-field col s12">
                    <i class="material-icons prefix">lock_outline</i>
                    <input id="password" type="password" name="pass">
                    <label for="password">Password</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                  <button class="btn waves-effect waves-light col s12" type="submit" >
  S'enregistrer
  </button>
                  </div>
                </div>
                
                    
            
                    <div class="input-field col s6 m6 l6">
                      <p class="margin medium-small">Vous etes deja inscrit?</p>
                    </div>
                    <div class="input-field col s6 m6 l6">
                        <p class="margin right-align medium-small"><a href="../controlleurs/VerifierAdmin.php">Se connecter</a></p>
                    </div>          
                   
                
        
            </form>
            </div>
          </div>
        
        
</body>
</html>
<script>
var app = angular.module('mainModule', []);

app.controller('mainController', function($scope, $http){ //o scope liga o js e o template
  $scope.nome = 'Valor Inicial';
  //$http.get().success();
  $scope.reset = function()
  {
    $scope.nome = '';
  }
});

</script>