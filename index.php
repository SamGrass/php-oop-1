<?php
require_once __DIR__ . '/Model/movie.php';
require_once __DIR__ . '/Model/genre.php';
require_once __DIR__ . '/db/db-movies.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="m-4 text-center">Movies List</h1>
        <div class="d-flex justify-content-between">
            <?php foreach ($movies as $movie): ?>
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $movie->img ?> " class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?php echo $movie->name ?></h5>
                        <h6 class="card-title text-center"><?php echo $movie->year ?></h6>
                        <ul>
                            <?php $movie->genre->printGenre() ?>
                        </ul>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>