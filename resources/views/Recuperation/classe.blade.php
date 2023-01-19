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
            <div class="form">
                <p class="h2">Veiller remplir le formulaire</p>
                <form>
                    @csrf
                <div class="form-row"> 
                    <div class="col">
                        <label class="control-label col-sm-2" for="code">Code de la classe:</label>
                        <input required="required" id="code" name="code" type="text" class="form-control" placeholder="Code de la classe">
                    </div>  
                    <div class="col">
                        <label class="control-label col-sm-2" for="intitule">Intitule de la classe:</label>
                        <input required="required" id="intitule" name="intitule" type="text" class="form-control" placeholder="Intitule de la classe">
                    </div>  
                    <div class="col">
                        <label class="control-label col-sm-2" for="filiere_code">Code de la filière:</label>
                        <select required="required" id="filiere_code" name="filiere_id" class="form-control">
                            <option disabled selected hidden>Code de la filiere</option>
                            @foreach ($filieres as $filiere)
                                <option value="{{$filiere->id}}">{{ $filiere->code }}</option>
                            @endforeach
                        </select>
                    </div> 
                    <div class="col">
                        <label class="control-label col-sm-2" for="niveau_code">Code du niveau:</label>
                        <select required="required" id="niveau_code" name="niveau_id" class="form-control">
                            <option disabled selected hidden>Code du niveau</option>
                            @foreach ($niveaux as $niveau)
                                <option value="{{$niveau->id}}">{{ $niveau->code }}</option>
                            @endforeach
                        </select>
                    </div> 

                </div> <br>
                <button type="submit" class="btn btn-default">Submit</button>
                </form>
                
                
                  
             
                
             </div><br><br><br>
             <table class="table">
            <th scope="col">#</th>
            <th scope="col">Code</th>
            <th scope="col">Intitule</th>
            <th scope="col">Filiere</th>
            </tr>
        </thead>
        <tbody>
        
        @forelse($classes as $classe)
                <tr>
                    <td> {{$classe['id']}} </td>
                    <td> {{$classe['code']}} </td>
                    <td> {{$classe['intitule']}} </td>
                    <td> {{$classe['filiere']['code']}} </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3">Aucune classe trouvee</td>
                </tr>
                @endforelse
                <tr>
   
        </table>
</body>
</html>