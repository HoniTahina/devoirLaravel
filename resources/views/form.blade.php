<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="container">Formulaire d'ajout</h1>
    
    <form action="ajouter" method="POST" class="container my-5">
    {{csrf_field()}}
      <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrer le nom du projet">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description"></textarea>
      </div>
      <div class="mb-3">
        <label for="dateDebut" class="form-label">Date de début</label>
        <input type="date" class="form-control" id="dateDebut" name="dateDebut" placeholder="Date de début du projet">
      </div>
      <div class="mb-3">
        <label for="DateFin" class="form-label">Date de fin</label>
        <input type="date" class="form-control" name="dateFin" id="dateFin">
      </div>

      <button type="submit" class="btn btn-primary">Ajouter</button>
      <a href="/afficher" class="btn btn-primary">Voir la liste des projet</a>
      
    </form>
  </body>
</html>