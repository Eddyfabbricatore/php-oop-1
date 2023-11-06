<?php

  require_once __DIR__ . '/Movie.php';
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
  <div class="container my-5 d-flex">
    <?php foreach($movies as $movie): ?>
      <div class="card">
        <img src="img/<?php echo $movie->image->file_name ?>" class="card-img-top" alt="<?php echo $movie->image->name ?>">

        <div class="card-body">
          <h5 class="card-title">Titolo: <?php echo $movie->name  ?></h5>
          <p class="card-text">Anno di uscita: <?php echo $movie->year ?></p>
          <p class="card-text">Durata: <?php echo $movie->duration ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</body>
</html>