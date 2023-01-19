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
   margin-left:3%;
   margin-right:3%;
  }
  </style>
</head>
        <body>
        <div>	
            <ul  class="nav nav-pills">
                        <li class="active">
                    <a  href="#1b" data-toggle="tab">Ajouter par formulaire</a>
                        </li>
                        <li><a href="#2b" data-toggle="tab">Ajouter par fichier</a>
                        </li>
                    </ul>

                        <div class="tab-content clearfix">
                        <div class="tab-pane active" id="1b">
                        <div class="form">
                <p class="h2">Veiller remplir le formulaire</p>
                <form action="/niveaux" method="post">
                @csrf
                    <div class="form-row">
                        <div class="col">
                            <label class="control-label col-sm-2" for="code">Code:</label>
                            <input id="code" required="required" name="code" type="text" class="form-control" placeholder="Code du niveau">
                        </div> 
                        <div class="col">
                            <label class="control-label col-sm-2" for="intitule">Intitule:</label>
                            <input id="intitule" required="required" name="intitule" type="text" class="form-control" placeholder="Intitule du niveau">
                        </div> 
                    </div> <br>
                    <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                
                
                  
             
                
             </div>
                            </div>
                            <div class="tab-pane" id="2b">
                                <form action="/niveaux" method='post' enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" accept='.csv' name='niveaux'/>
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </form>
                            </div>
                        </div>
            </div>

            <br><br><br>
        <table class="table">
            <th scope="col">#</th>
            <th scope="col">Code</th>
            <th scope="col">Intitule du niveau</th>
            </tr>
        </thead>
        <tbody>
        
        @forelse($niveaux as $niveau)
                <tr>
                    <td> {{$niveau['id']}} </td>
                    <td> {{$niveau['code']}} </td>
                    <td> {{$niveau['intitule']}} </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3">Aucun niveau trouve</td>
                </tr>
                @endforelse
                <tr>
   
        </table>
</body>
</html>