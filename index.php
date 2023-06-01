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
            $keys = array_keys($this->person_data);
            $this->person_data[$keys[$_index]] = $_value;
            var_dump($keys);
        }
    };

    $person_data = ["name" => "Leonardo Wilhelm", "surname" => "DiCaprio", "is_male" => true, "nationality" => "U.S.A.", "role" => "Main Character"];
    $person1 = new Movie_Person($person_data);

    var_dump($person1);
    echo "<br><br>";
    $person1->set_data(0,"Leonardo e basta");
    var_dump($person1);
    echo "<br><br>";
    $person1->set_data(3,"Italian blood");
    var_dump($person1);
    echo "<br><br>";

    class Movie 
    {
        public $title;
        public $genre;
        public $director;
        public $poster_url;

        function __construct($_title, $_genre, $_director)
        {
            $this->title = $_title;
            $this->genre = $_genre;
            $this->director = $_director; 
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
        new Movie("The exorcist", "Horror", "William Friedkin"),
        new Movie("The King's Speech", "Historical Drama", "Tom Hooper"),
        new Movie("Body of lies", "Spy Action Thriller", "Ridley Scott")
    ];
    $movies[0]->set_poster_url("https://m.media-amazon.com/images/I/71KnXY8ZfiL._AC_UF894,1000_QL80_.jpg");
    $movies[1]->set_poster_url("https://m.media-amazon.com/images/I/51XZNIFP+1L._AC_UF894,1000_QL80_.jpg");
    $movies[2]->set_poster_url("https://m.media-amazon.com/images/M/MV5BMTgzOTY3MTM0OV5BMl5BanBnXkFtZTcwNjc5MTI5MQ@@._V1_.jpg");

    var_dump($movies[2]);
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
    </style>
</head>
<body>
    <header>
        <h1 class="text-center text-black-50">My favorite movies</h1>
    </header>
    <main>
        <div class="row justify-content-between w-75 p-5 mx-auto border border-5 rounded-5 bg-info">
            <?php 
                foreach($movies as $movie):
            ?>
                    <div class="col-3 py-2 card">
                        <img src="<?php echo $movie->get_poster_url() ?>" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?php echo $movie->get_title() ?></h5>
                            <span class="card-text py-2 d-block"><?php echo $movie->get_genre() ?></span>
                            <a href="#" class="btn btn-primary"><?php echo $movie->get_director() ?></a>
                        </div>
                    </div>
            <?php
                endforeach;
            ?>
        </div>
    </main>
</body>
</html>