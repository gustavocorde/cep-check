<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">


  </head>
  <body>
    <div class="container">

        <h1 class="mb-5">Buscar CEP</h1>

    <form action = "{{route('search')}}" method="GET">
  <div class="form-group">
    <label for="cep" class="form-label">Insira o CEP</label>
    <input type="text" class="form-control" name="cep">
  </div>

  <h2>
  <button type="submit" class="btn btn-primary">Enviar</button>
  </h2>

</form>

    </div>
    <h1></h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>