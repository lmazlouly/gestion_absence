<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Gestion Absences</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/081bdfb185.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="m-auto text-center table-hover" style="max-width: 1024px;">
    <h1> Gestion Absences </h1>
    @if (count($absences))
      <form class="text-center" action="{{url('gestion_absence')}}" method="get">
        <label for="semaine">Semaine</label>
        <input type="text" id="semaine" name="semaine" value="{{ request()->get('semaine') }}">
        <input type="button" value="valider">
        <input onclick="location.href = '{{url('gestion_absence')}}'" type="reset" value="annuler">
      </form>
      <br> <br>
      <table class="table">
        <thead>
          <th>CNE</th>
          <th>Semaine</th>
          <th>Absences</th>
          <th>
            <a href="{{url('ajouter_absence')}}">
              >> Ajouter Absence
            </a>
          </th>
        </thead>
        <tbody>
          @foreach ($absences as $absence)
            <tr>
              <td>{{ $absence->cne }}</td>
              <td>{{ $absence->semaine }}</td>
              <td>{{ $absence->nbr_abs }}</td>
              <td class="row">
                <a class="col-4" href="{{url('modifier_absence?cne=' . $absence->cne . '&semaine=' . $absence->semaine)}}">
                  <i class="fas fa-pen"></i>
                </a>
                <a class="col-4" href="{{url('supprimer_absence/' . $absence->cne . '/' . $absence->semaine)}}" style="color: red;">
                  <i class="fas fa-times"></i>
                </a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table> 
    @else
      <a href="{{url('ajouter_absence')}}">
        Ajouter Absence
      </a>   
    @endif

    <a href="{{url('')}}">
      Accueil
    </a>   

  </div>
</body>
</html>