<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Gestion Eleves</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
  <div class="m-auto text-center table-hover" style="max-width: 1024px;">
    <h1> Gestion Eleves </h1>
    @if (count($eleves))
      <table class="table">
        <thead>
          <th>CNE</th>
          <th>Nom</th>
          <th>Prenom</th>
          <th>Groupe</th>
          <th>
            <a href="{{url('ajouter_eleve')}}">
              Ajouter Eleve
            </a>
          </th>
        </thead>
        <tbody>
          @foreach ($eleves as $eleve)
            <tr>
              <td>{{ $eleve->cne }}</td>
              <td>{{ $eleve->nom }}</td>
              <td>{{ $eleve->prenom }}</td>
              <td>{{ $eleve->groupe }}</td>
            </tr>
          @endforeach
        </tbody>
      </table> 
    @else
      <a href="{{url('ajouter_eleve')}}">
        Ajouter Eleve
      </a>   
    @endif
    
  </div>
</body>
</html>