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
    
    <form action="{{'ajoutPhase/' . $projet->id}}" method="POST" class="container my-5">
    {{csrf_field()}}
      <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrer le nom de la phase">
      </div>
      <div class="mb-3">
        <label for="duree" class="form-label">Durée</label>
        <input type="text" class="form-control" id="duree" name="duree" placeholder="Entrer la durée de la phase">
      </div>
      <div class="mb-3">
        <label for="priorite" class="form-label">Prioirité</label>
        <input type="text" class="form-control" id="priorite" name="priorite" placeholder="Date de début du projet">
      </div>

      <button type="submit" class="btn btn-primary">Ajouter</button>
      <a href="{{'annuler/' . $projet->id}}" class="btn btn-primary">Annuler</a>
      
    </form>
  </body>
</html>