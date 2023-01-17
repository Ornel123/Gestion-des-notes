<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
   .container
   {
    margin-top:20%;

   }
    .btn-lg
    {
        width:20%;
        margin-left:19%;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Gestion Notes</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Importation
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/etudiants">-Etudiants</a></li>
          <li><a href="/classes">Classe</a></li>
          <li><a href="/filieres">Filiere</a></li>
          <li><a href="/niveaux">Niveau</a></li>
          <li><a href="#">Note</a></li>
          <li><a href="#">UE</a></li>
        </ul>
      </li>
      <li><a href="#">Calcul pv</a></li>
      <li><a href="#">Deliberqtion</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">

<button type="button" class="btn btn-secondary btn-lg"><a href="/formulaire1">Insertion par fichier excel</a></button>
<button type="button" class="btn btn-secondary btn-lg"><a href="/formulaire2">Insertion par formulaire</a></button>

</div>

</body>
</html>
