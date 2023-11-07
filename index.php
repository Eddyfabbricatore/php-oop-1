<?php

  require_once __DIR__ . '/Production.php';
  require_once __DIR__ . '/Movie.php';
  require_once __DIR__ . '/TvSerie.php';
  require_once __DIR__ . '/Media.php';
  require_once __DIR__ . '/db.php';

?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="style.css">

  <title>PHP OOP</title>
</head>
<body>
  <div class="container my-5">
    <h1>Film</h1>

    <div class="film d-flex">
      <?php foreach($movies as $movie): ?>
        <div class="card ms-1 me-1">
          <img src="img/<?php echo $movie->image->file_name ?>" class="card-img-top" alt="<?php echo $movie->image->name ?>">

          <div class="card-body">
            <h5 class="card-title">Titolo: <?php echo $movie->name  ?></h5>
            <p class="card-text">Anno di uscita: <?php echo $movie->published_year ?></p>
            <p class="card-text">Durata: <?php echo $movie->running_timedurata ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="container my-5">
    <h1>Serie Tv</h1>

    <div class="serie d-flex">
      <?php foreach($series as $serie): ?>
        <div class="card ms-1 me-1">
          <img src="img/<?php echo $serie->image->file_name ?>" class="card-img-top" alt="<?php echo $serie->image->name ?>">

          <div class="card-body">
            <h5 class="card-title">Titolo: <?php echo $serie->name  ?></h5>
            <p class="card-text">Anno di uscita prima stagione: <?php echo $serie->aired_from_year ?></p>
            <p class="card-text">Anno di uscita ultima stagione: <?php echo $serie->aired_to_year ?></p>
            <p class="card-text">Numero di episodi: <?php echo $serie->number_of_episodes ?></p>
            <p class="card-text">Numeri di stagioni: <?php echo $serie->number_of_seasons ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</body>
</html>