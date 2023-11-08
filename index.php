<?php

  try{
    require_once __DIR__ . '/Traits/YearOfPublication.php';
    require_once __DIR__ . '/Model/Production.php';
    require_once __DIR__ . '/Model/Movie.php';
    require_once __DIR__ . '/Model/TvSerie.php';
    require_once __DIR__ . '/Model/Media.php';
    require_once __DIR__ . '/db/db.php';
  }catch(Exception $e){
    $error = $e->getMessage();
  }

?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat:wght@400;500&family=Open+Sans:wght@400;500&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css">

  <title>PHP OOP</title>
</head>
<body>
  <div class="container my-5">
    <?php if(isset($error)): ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $error ?>
      </div>

    <?php else: ?>
      <h1 class="text-center mb-3">Raccolta di Film e SerieTv</h1>

      <div class="row d-flex">
        <?php foreach($collections as $collection): ?>
          <div class="col-3 mb-3">
            <div class="card">
              <div class="card-img">
                <img src="img/<?php echo $collection->image->file_name ?>" alt="<?php echo $collection->image->name ?>">
              </div>

              <div class="card-body">
                <p class="card-text"><?php echo $collection->getInfo() ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</body>
</html>