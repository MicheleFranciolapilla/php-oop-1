<?php
    require_once __DIR__ . '/../php_modules/class_movie_person.php';
    require_once __DIR__ . '/../php_modules/class_movie.php';


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

    $cast_collection = array();
    array_push($cast_collection,[
                                    new Movie_Person([   
                                                        "name" => "Max",
                                                        "surname" => "von Sydow",
                                                        "is_male" => true,
                                                        "role" => "Main Character",
                                                        "nationality" => "Swedish"
                                                    ]),
                                    new Movie_Person([   
                                                        "name" => "Linda",
                                                        "surname" => "Blair",
                                                        "is_male" => false,
                                                        "role" => "Main Character",
                                                        "nationality" => "U.S.A."
                                                    ]),
                                    new Movie_Person([   
                                                        "name" => "Jason",
                                                        "surname" => "Miller",
                                                        "is_male" => true,
                                                        "role" => "Main Character",
                                                        "nationality" => "U.S.A."
                                                    ]),
                                    new Movie_Person([   
                                                        "name" => "Ellen",
                                                        "surname" => "Burstyn",
                                                        "is_male" => false,
                                                        "role" => "Side Character",
                                                        "nationality" => "U.S.A."
                                                    ]),
                                ]);
                        
    array_push($cast_collection,[
                                    new Movie_Person([   
                                                        "name" => "Colin",
                                                        "surname" => "Firth",
                                                        "is_male" => true,
                                                        "role" => "Main Character",
                                                        "nationality" => "British"
                                                    ]),
                                    new Movie_Person([   
                                                        "name" => "Geoffrey",
                                                        "surname" => "Rush",
                                                        "is_male" => true,
                                                        "role" => "Main Character",
                                                        "nationality" => "Australian"
                                                    ]),
                                    new Movie_Person([   
                                                        "name" => "Helena",
                                                        "surname" => "Bonham Carter",
                                                        "is_male" => false,
                                                        "role" => "Side Character",
                                                        "nationality" => "British"
                                                    ]),
                                ]);
    array_push($cast_collection,[
                                    new Movie_Person([   
                                                        "name" => "Leonardo",
                                                        "surname" => "DiCaprio",
                                                        "is_male" => true,
                                                        "role" => "Main Character",
                                                        "nationality" => "U.S.A."
                                                    ]),
                                    new Movie_Person([   
                                                        "name" => "Russell",
                                                        "surname" => "Crowe",
                                                        "is_male" => true,
                                                        "role" => "Main Character",
                                                        "nationality" => "New Zealander"
                                                    ]),
                                    new Movie_Person([   
                                                        "name" => "Mark",
                                                        "surname" => "Strong",
                                                        "is_male" => true,
                                                        "role" => "Side Character",
                                                        "nationality" => "British"
                                                    ]),
                                    new Movie_Person([   
                                                        "name" => "Golshifteh",
                                                        "surname" => "Farahani",
                                                        "is_male" => false,
                                                        "role" => "Side Character",
                                                        "nationality" => "Iranian"
                                                    ]),
                                    new Movie_Person([   
                                                        "name" => "Oscar",
                                                        "surname" => "Isaac",
                                                        "is_male" => true,
                                                        "role" => "Side Character",
                                                        "nationality" => "Guatemalan"
                                                    ]),
                                ]);

    $movies = [
                new Movie("The exorcist", "Horror", new Movie_Person($directors_data[0]), $cast_collection[0]),
                new Movie("The King's Speech", "Historical Drama", new Movie_Person($directors_data[1]), $cast_collection[1]),
                new Movie("Body of lies", "Spy Action Thriller", new Movie_Person($directors_data[2]), $cast_collection[2])
            ];
    $movies[0]->set_poster_url("https://m.media-amazon.com/images/I/71KnXY8ZfiL._AC_UF894,1000_QL80_.jpg");
    $movies[1]->set_poster_url("https://m.media-amazon.com/images/I/51XZNIFP+1L._AC_UF894,1000_QL80_.jpg");
    $movies[2]->set_poster_url("https://m.media-amazon.com/images/M/MV5BMTgzOTY3MTM0OV5BMl5BanBnXkFtZTcwNjc5MTI5MQ@@._V1_.jpg");
?>