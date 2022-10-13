<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ajouter Eleve</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
  <div class="text-center m-auto" style="max-width: 720px;">
    <h1> Ajouter Eleve </h1>
    <form action="{{url('ajouter_eleve')}}" method="post">
      <div class="form-group">
        <label for="cne">CNE</label>
        <input type="text" class="form-control" id="cne" name="cne" placeholder="cne">
      </div>
      <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
      </div>
      <div class="form-group">
        <label for="prenom">Prenom</label>
        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prenom">
      </div>
      <div class="form-group">
        <label for="groupe">Groupe</label>
        <input type="text" class="form-control" id="groupe" name="groupe" placeholder="Groupe">
      </div>
      @csrf
      <hr class="mt-2">
      <button type="submit" class="btn btn-success">Ajouter</button>
      <button onclick="location.href = '{{url('gestion_eleve')}}'" type="reset" class="btn btn-primary">Annuler</button>
    </form>
  </div>
</body>
</html>