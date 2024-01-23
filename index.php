<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6"> 
<form action="result.php" method="GET">
  <div class="mb-3">
    <label for="control-label" class="form-label">Inserisci un testo</label>
    <input type="text" class="form-control" id="testo" name="testo">
  </div>
  <div class="mb-3">
    <label for="control-label" class="form-label">Inserisci la parola da censurare</label>
    <input type="text" class="form-control" id="censura" name ="censura">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
    </div>
</body>
</html>