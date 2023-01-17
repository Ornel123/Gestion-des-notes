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
  .form
  {
   margin-left:25%;
   margin-right:20%;
   margin-top:10%;
  }
  .form-control
  {
    width:70%;
  }
  .btn-default
  {
    margin-left:40%;
    width:15%;
  }
  .h2
  {
    margin-left:20%;
  }
  .form-row
  {
    margin-left:7%;
  }
  </style>
</head>
        <body>
            <div class="form">
                <p class="h2">Veiller remplir le formulaire</p><br>
                <form>
                <div class="form-row">
                    <div class="col">
                    <label class="control-label col-sm-2" for="email">Matricule:</label>
                    <input type="text" class="form-control" placeholder="Saisir matricule">
                    </div><br>
                    <div class="col">
                    <label class="control-label col-sm-2" for="email">Nom:</label>
                    <input type="text" class="form-control" placeholder="Saisir nom">
                    </div><br>
                    <div class="col">
                    <label class="control-label col-sm-2" for="email">Note:</label>
                    <input type="text" class="form-control" placeholder="Saisir note">
                    </div>
                </div>
                
                </form><br>
                
                
                <button type="submit" class="btn btn-default"><a href="/fichier"> Submit</a></button>

                </form>
                </div>
             </div>
       
</body>
</html>