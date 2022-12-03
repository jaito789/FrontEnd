<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empresa MZ</title>
</head>
<body>
            @foreach($amiibos as $amiibo)
              <div class="card" style="width: 25rem;">
                <img src="{{ $amiibo['image'] }}" class="img-thumbnail" alt="..." >
                <div class="card-body">
                  <h5 class="card-title">{{$amiibo['character']}}</h5>
                  <h5 class="card-text">{{$amiibo['gameSeries']}}</h5>
                </div>
              </div>
            @endforeach
{{--
    <div class="container"><table class="table">
        <thead>
          <tr>
            <th scope="col">Character</th>
            <th scope="col">Game Series</th>
            <th scope="col">Amiibo Series</th>
            <th scope="col">Imagen</th>
          </tr>
        </thead>
        <tbody>
            @foreach($amiibos as $amiibo)

            <tr>
                <td>{{$amiibo['character']}}</td>
                <td>{{$amiibo['gameSeries']}}</td>
                <td>{{$amiibo['amiiboSeries']}}</td>
                <td><img src="{{ $amiibo['image'] }}" class="card-img-top" alt="..."></td>
              </tr>

            @endforeach

        </tbody>
      </table>
    </div> --}}







<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
