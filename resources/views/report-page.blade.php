<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        
    </head>
    <body class="antialiased bg-light">
<section class="container bg-success p-5 mt-5 rounded shadow-lg bg-white flex-col">

    

    <div class="dropdown mb-4">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ataskaitos
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          @foreach ($positions as $row)
            <a class="dropdown-item" href="{{ url('/export/'.$row->position_code) }}">{{ $row->position_name }}</a> 
            @endforeach
        </div>
      </div>    

      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">Vardas</th>
            <th scope="col">Pavardė</th>
            <th scope="col">Profesija</th>
            <th scope="col">El. paštas</th>
            <th scope="col">Tel. numeris</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($persons as $row)
            <tr>
                
                <td>{{ $row->name }}</td>
                <td>{{ $row->surname }}</td>
                <td>{{ $row->position }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->phone }}</td>
              
            </tr>
            @endforeach
        </tbody>
      </table>
</section>
  
  
  

    </body>
</html>
