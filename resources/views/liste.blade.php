<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Liste d'étudiant</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      </head>
  <body>
    <h1>Liste des étudiants <a class="btn btn-info" href="/">Ajouter un projet </a></h1>
    <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Date de début</th>
      <th scope="col">Date de fin</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach($projet as $p)
        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->nom}}</td>
            <td>{{$p->dateDebut}}</td>
            <td>{{$p->dateFin}}</td>
            <td>
                <a href="{{'modifier/' . $p->id}}" class="btn btn-info">Modifier</a>
                <a href="{{'supprimer/' . $p->id}}" class="btn btn-danger">Suppprimer</a>
                <a href="{{'detail/' . $p->id}}" class="btn btn-primary">Details</a>
            </td>
        </tr>
  @endforeach
    </tr>
   
  </tbody>
</table>
  </body>
</html>