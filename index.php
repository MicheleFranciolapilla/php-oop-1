<?php
    class Movie_Person
    {
        public $person_data = array();

        function __construct(array $_person_data)
        {
            $this->person_data = $_person_data;
        }

        function set_data($_index, $_value)
        {
            $this->person_data[$this->get_key($_index)] = $_value;
        }

        function get_data($_index)
        {
            return $this->person_data[$this->get_key($_index)];
        }

        function get_key($_index)
        {
            $keys = array_keys($this->person_data);
            return $keys[$_index];
        }
    };

    $gender_str = fn(bool $is_male) => ($is_male) ? ("Man") : ("Woman");

    $directors_data = array();
    array_push($directors_data,["name" => "William",
                                "surname" => "Friedkin",
                                "is_male" => true,
                                "role" => "Director",
                                "nationality" => "U.S.A."
                            ]);
    array_push($directors_data,["name" => "Tom",
                                "surname" => "Hooper",
                                "is_male" => true,
                                "role" => "Director",
                                "nationality" => "Australian"
                            ]);
    array_push($directors_data,["name" => "Ridley",
                                "surname" => "Scott",
                                "is_male" => true,
                                "role" => "Director",
                                "nationality" => "British"
                            ]);


// var_dump($directors_data);
                
    // $person_data = ["name" => "Leonardo Wilhelm", "surname" => "DiCaprio", "is_male" => true, "nationality" => "U.S.A.", "role" => "Main Character"];
    // $person1 = new Movie_Person($person_data);

    // var_dump($person1);
    // echo "<br><br>";
    // $person1->set_data(0,"Leonardo e basta");
    // var_dump($person1);
    // echo "<br><br>";
    // $person1->set_data(3,"Italian blood");
    // var_dump($person1);
    // echo "<br><br>";

    class Movie 
    {
        public $title;
        public $genre;
        public $director;
        public $cast;
        public $poster_url;

        function __construct($_title, $_genre, Movie_Person $_director, $_cast)
        {
            $this->title = $_title;
            $this->genre = $_genre;
            $this->director = $_director; 
            $this->cast = $_cast;
        }

        function set_title($_title)
        {
            $this->title = $_title;
        }

        function get_title()
        {
            return $this->title;
        }

        function set_genre($_genre)
        {
            $this->genre = $_genre;
        }

        function get_genre()
        {
            return $this->genre;
        }

        function set_director($_director)
        {
            $this->director = $_director;
        }

        function get_director()
        {
            return $this->director;
        }

        function set_cast($_cast)
        {
            $this->cast = $_cast;
        }

        function get_cast()
        {
            return $this->cast;
        }

        function set_poster_url($_poster_url)
        {
            $this->poster_url = $_poster_url;
        }

        function get_poster_url()
        {
            return $this->poster_url;
        }
    }



    $movies = [
        new Movie("The exorcist", "Horror", new Movie_Person($directors_data[0]), "io"),
        new Movie("The King's Speech", "Historical Drama", new Movie_Person($directors_data[1]), "tu"),
        new Movie("Body of lies", "Spy Action Thriller", new Movie_Person($directors_data[2]), "lei")
    ];
    $movies[0]->set_poster_url("https://m.media-amazon.com/images/I/71KnXY8ZfiL._AC_UF894,1000_QL80_.jpg");
    $movies[1]->set_poster_url("https://m.media-amazon.com/images/I/51XZNIFP+1L._AC_UF894,1000_QL80_.jpg");
    $movies[2]->set_poster_url("https://m.media-amazon.com/images/M/MV5BMTgzOTY3MTM0OV5BMl5BanBnXkFtZTcwNjc5MTI5MQ@@._V1_.jpg");

    // var_dump($movies[2]);
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

        .director_area
        {
            position: relative;
            cursor: pointer;
        }

        .director_area > div
        {
            display: none;
            flex-direction: column;
            gap: 5px;
            align-items: center;
            width: 100%;
        }

        .director_area:hover > div
        {
            display: flex;
        }
    </style>
</head>
<body>
    <header>
        <h1 class="text-center text-black-50">My favorite movies</h1>
    </header>
    <main>
        <div class="row justify-content-between w-75 p-2 mx-auto border border-5 rounded-5 bg-info">
            <?php 
                foreach($movies as $movie):
            ?>
                    <div class="col-3 py-2 card">
                        <img src="<?php echo $movie->get_poster_url() ?>" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?php echo $movie->get_title() ?></h5>
                            <span class="card-text py-2"><?php echo $movie->get_genre() ?></span>
                            <div class="director_area text-primary">
                                <span><?php echo $movie->get_director()->get_data(0) . " " . $movie->get_director()->get_data(1) ?></span>
                                <div class="position-absolute top-0 start-0 text-primary border border-3 rounded-3 bg-light">
                                    <span><?php echo $movie->get_director()->get_data(0) . " " . $movie->get_director()->get_data(1) ?></span>
                                    <span><?php echo $gender_str($movie->get_director()->get_data(2)) ?></span>
                                    <span><?php echo strtoupper($movie->get_director()->get_key(4)) . " : " . $movie->get_director()->get_data(4) ?></span>
                                    <span><?php echo strtoupper($movie->get_director()->get_key(3)) . " : " . $movie->get_director()->get_data(3) ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                endforeach;
            ?>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>