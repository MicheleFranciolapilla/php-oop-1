<?php

    require_once __DIR__ . './php_modules/db.php';
    require_once __DIR__ . './php_modules/functions.php';

    $clicked_index = 1;
    $clicked_movie = null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link a Bootstrap style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>My Movies (OOP)</title>
    <style>
        .card > img
        {
            width: 100%;
            aspect-ratio: 5/8;
        }

        .cast_link
        {
            display: block;
        }

        .director_area,
        .cast_area
        {
            position: relative;
            cursor: pointer;
        }

        .director_area > div,
        .cast_area > div
        {
            display: none;
            flex-direction: column;
            gap: 5px;
            align-items: center;
            top: 0;
            left: 0;
            width: 100%;
        }

        .cast_area > div
        {
            left: 5%;
            width: 100%;
        }

        .cast_area .img_box
        {
            width: 100%;
            text-align: center;
        }

        .cast_area .img_box > img
        {
            width: 95%;
            aspect-ratio: 1;
            object-fit: cover;
        }

        .director_area:hover > div,
        .cast_area:hover > div
        {
            display: flex;
            z-index: 999;
        }
    </style>
</head>
<body>
    <header>
        <h1 class="text-center text-black-50">My favorite movies</h1>
    </header>
    <main>
        <div class="row justify-content-between w-75 p-1 mx-auto border border-3 rounded-5 bg-info">
            <?php 
                foreach($movies as $index => $movie):
            ?>
                    <div class="col-3 py-1 card">
                        <img src="<?php echo $movie->get_poster_url() ?>" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?php echo $movie->get_title() ?></h5>
                            <span class="card-text py-2"><?php echo $movie->get_genre() ?></span>
                            <a class="btn btn-primary d-block" data-bs-toggle="offcanvas" href="<?php echo '#offcanvas_cast' . strval($index) ?>" role="button" aria-controls="offcanvas_cast">Cast</a>
                            <div class="director_area text-secondary mt-2">
                                <span><?php echo $movie->get_director()->get_data(0) . " " . $movie->get_director()->get_data(1) ?></span>
                                <div class="position-absolute border border-1 border-dark rounded-3 bg-light">
                                    <span><?php echo $movie->get_director()->get_data(0) . " " . $movie->get_director()->get_data(1) ?></span>
                                    <span><?php echo $gender_str($movie->get_director()->get_data(2)) ?></span>
                                    <span><?php echo strtoupper($movie->get_director()->get_key(4)) . " : " . $movie->get_director()->get_data(4) ?></span>
                                    <span><?php echo strtoupper($movie->get_director()->get_key(3)) . " : " . $movie->get_director()->get_data(3) ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="<?php echo 'offcanvas_cast' . strval($index) ?>" aria-labelledby="offcanvas_castLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvas_castLabel">
                                <?php 
                                    $clicked_movie = $movies[$index];
                                    echo $clicked_movie->get_title();
                                ?>
                            </h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <div>
                                <h6>Cast</h6>
                                <?php
                                    echo '<ul class="d-flex flex-column mt-5">';
                                        foreach($clicked_movie->get_cast() as $character)
                                            echo 
                                                '<li>
                                                    <div class="cast_area text-secondary mt-2">
                                                        <span>' 
                                                            . $character->get_data(0) . " " . $character->get_data(1) . 
                                                        '</span>
                                                        <div class="position-absolute border border-1 border-dark rounded-3 bg-light">
                                                            <span>' . $character->get_data(0) . " " . $character->get_data(1) . '</span>
                                                            <span>' . $gender_str($character->get_data(2)) . '</span>
                                                            <div class="img_box">
                                                                <img src="' . $character->get_data(5) . '">
                                                            </div>
                                                            <span>' . strtoupper($character->get_key(4)) . " : " . $character->get_data(4) . '</span>
                                                            <span>' . strtoupper($character->get_key(3)) . " : " . $character->get_data(3) . '</span>
                                                        </div>
                                                    </div>
                                                </li>';
                                    echo '</ul>';
                                ?>
                            </div>
                        </div>
                    </div>
            <?php
                endforeach;
            ?>
        </div>
    </main>
    <!-- CDN Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>