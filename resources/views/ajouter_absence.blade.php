<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ajouter Absence</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
  <div class="text-center m-auto" style="max-width: 720px;">
    <h1> Ajouter Eleve </h1>
    <form action="{{url('ajouter_absence')}}" method="post">
      <div class="form-group">
        <label for="cne">Choisir Eleve</label>
        <select name="cne" id="cne">
          @foreach ($eleves as $eleve)
            <option value="{{$eleve->cne}}">
              {{$eleve->cne}}
            </option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="nom">Semaine</label>
        <input type="number" class="form-control" id="semaine" name="semaine" placeholder="Semaine">
      </div>
      <div class="form-group">
        <label for="groupe">Nombre d'absences</label>
        <input type="text" class="form-control" id="nbr_abs" name="nbr_abs" placeholder="nombre d'absences">
      </div>
      @csrf
      <hr class="mt-2">
      <button type="submit" class="btn btn-success">Ajouter</button>
      <button onclick="location.href = '{{url('gestion_absences')}}'" type="reset" class="btn btn-primary">Annuler</button>
    </form>
  </div>
</body>
</html>