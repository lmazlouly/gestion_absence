<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Supprimer Eleve</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
  <div class="text-center m-auto" style="max-width: 720px;">
    <h1> Supprimer Eleve </h1>
    <form action="{{url('supprimer_eleve/' . $eleve->cne)}}" method="post">
      <p class="text-danger text-center">
        Voulez-vous vraiment supprimer l'élève <b>{{$eleve->cne}}</b>?
        <br>
        Cette action ne peut pas être annulée!
      </p>
      <div class="form-group">
        <label for="confirm_oui">Oui</label>
        <input type="radio" class="" id="confirm_oui" name="confirm" value="oui">
        <label for="confirm_non">Non</label>
        <input type="radio" class="" id="confirm_non" name="confirm" value="non">
      </div>
      @csrf
      <hr class="mt-2">
      <button type="submit" class="btn btn-success">Valider</button>
      <button onclick="location.href = '{{url('gestion_eleves')}}'" type="reset" class="btn btn-primary">Annuler</button>
    </form>
  </div>
</body>
</html>