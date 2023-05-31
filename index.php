<?php
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

    $movie1 = new Movie("The exorcist", "Horror", "William Friedkin");
    $movie1->set_poster_url("https://m.media-amazon.com/images/I/71KnXY8ZfiL._AC_UF894,1000_QL80_.jpg");
    $movie2 = new Movie("The King's Speech", "Historical Drama", "Tom Hooper");
    $movie2->set_poster_url("https://m.media-amazon.com/images/I/51XZNIFP+1L._AC_UF894,1000_QL80_.jpg");
    $movie3 = new Movie("Body of lies", "Spy Action Thriller", "Ridley Scott");
    $movie3->set_poster_url("https://m.media-amazon.com/images/M/MV5BMTgzOTY3MTM0OV5BMl5BanBnXkFtZTcwNjc5MTI5MQ@@._V1_.jpg");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Movies (OOP)</title>
</head>
<body>
    
</body>
</html>