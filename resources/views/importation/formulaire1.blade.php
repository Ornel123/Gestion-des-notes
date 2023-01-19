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
   margin-left:30%;
   margin-right:20%;
   margin-top:10%;
  }
  .form-control
  {
    width:70%;
  }
  </style>
</head>
        <body>
            <div class="form">
                <p class="h2">Veiller remplir le formulaire</p>
                <form>
                <div class="form-row">
                    <div class="col">
                  
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Salle</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        </select>
                     </div>
               
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">UE</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        </select>
                     </div><br>
                  
                
                
                      <button type="submit" class="btn btn-default"><a href="/fichier"> Submit</a></button>
                  
                </form>
                </div>
             </div>
       
</body>
</html>