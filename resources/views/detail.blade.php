<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Liste d'étudiant</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      </head>
  <body>
    
    <h1>Details du projet </h1>
    <h2><u>Nom:</u>  {{$projet->nom}}</h2>
    <h3> <u>Description</u></h3>
    <p>{{$projet->description}}</p>
    <h3><u>Date :</u>  ( {{$projet->dateDebut}} à {{$projet->dateFin}})</h3>
    
      <table class="table table-dark table-striped">
        <thead>
          <tr>
            <td>Phases</td> 
            <td>Nom</td>
            <td>Durée</td>
            <td>Propriété</td>
            <td></td>
          </tr>
        </thead>
        <tbody>
          @foreach($projet->phases as $ph)
            <tr>
              <td>{{$ph->id}}</td>
              <td>{{$ph->nom}}</td>
              <td>{{$ph->duree}}</td>
              <td>{{$ph->priorite}}</td>
              <td>
                 <a href="{{'supr/' . $ph->id}}" class="btn btn-danger">Suppprimer</a>
              </td>
            </tr>
          @endforeach
        </tbody>    
                   
      </table>
     <a href="{{'formPhase/' . $projet->id}}" class="btn btn-info">Ajouter une phase</a>
  </body>
</html>