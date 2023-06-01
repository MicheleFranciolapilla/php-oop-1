<?php
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
?>