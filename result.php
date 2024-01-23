<?php

$paragrafo = $_GET['testo'];
$censura = $_GET['censura'];
$new_text = str_replace($censura , 'CENSORED' , $paragrafo);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
   <h1> Ecco il tuo testo con le dovute censure</h1>
   <br>
   <div class="fs-5">
    <?php echo $new_text; ?>
</div>
</body>
</html>