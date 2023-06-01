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
                                                        "nationality" => "Swedish",
                                                        "url_to_image" => "https://www.starwarsnewsnet.com/wp-content/uploads/2014/05/Max-von-sydow11.jpg"
                                                    ]),
                                    new Movie_Person([   
                                                        "name" => "Linda",
                                                        "surname" => "Blair",
                                                        "is_male" => false,
                                                        "role" => "Main Character",
                                                        "nationality" => "U.S.A.",
                                                        "url_to_image" => "https://static.sky.it/images/skytg24/it/spettacolo/cinema/approfondimenti/linda-blair-ieri-oggi/linda-blair-20-getty.jpg.transform/gallery-vertical-mobile-2x/2cc1501f8f6e8ecb0ad32738e3e594d289e87a41/img.jpg"

                                                    ]),
                                    new Movie_Person([   
                                                        "name" => "Jason",
                                                        "surname" => "Miller",
                                                        "is_male" => true,
                                                        "role" => "Main Character",
                                                        "nationality" => "U.S.A.",
                                                        "url_to_image" => "https://perfettamentechic.files.wordpress.com/2021/05/jason_miller_perfettamente_chic.jpg?w=244&h=221"
                                                    ]),
                                    new Movie_Person([   
                                                        "name" => "Ellen",
                                                        "surname" => "Burstyn",
                                                        "is_male" => false,
                                                        "role" => "Side Character",
                                                        "nationality" => "U.S.A.",
                                                        "url_to_image" => "https://cdn.britannica.com/65/161565-050-B684386C/Ellen-Burstyn-2001.jpg"
                                                    ]),
                                ]);
                        
    array_push($cast_collection,[
                                    new Movie_Person([   
                                                        "name" => "Colin",
                                                        "surname" => "Firth",
                                                        "is_male" => true,
                                                        "role" => "Main Character",
                                                        "nationality" => "British",
                                                        "url_to_image" => "https://cdn.britannica.com/14/162314-050-906D56EB/Colin-Firth-Academy-Award-actor-2011.jpg"
                                                    ]),
                                    new Movie_Person([   
                                                        "name" => "Geoffrey",
                                                        "surname" => "Rush",
                                                        "is_male" => true,
                                                        "role" => "Main Character",
                                                        "nationality" => "Australian",
                                                        "url_to_image" => "https://upload.wikimedia.org/wikipedia/commons/8/8b/Geoffrey_Rush_Cannes_2011.jpg"
                                                    ]),
                                    new Movie_Person([   
                                                        "name" => "Helena",
                                                        "surname" => "Bonham Carter",
                                                        "is_male" => false,
                                                        "role" => "Side Character",
                                                        "nationality" => "British",
                                                        "url_to_image" => "https://media.architecturaldigest.com/photos/57bf54cc71ea71ec6e0f4261/1:1/w_2250,h_2250,c_limit/Helena-Bonham-Carter-AD_01.jpg"
                                                    ]),
                                ]);
    array_push($cast_collection,[
                                    new Movie_Person([   
                                                        "name" => "Leonardo",
                                                        "surname" => "DiCaprio",
                                                        "is_male" => true,
                                                        "role" => "Main Character",
                                                        "nationality" => "U.S.A.",
                                                        "url_to_image" => "https://cdn.britannica.com/65/227665-050-D74A477E/American-actor-Leonardo-DiCaprio-2016.jpg"
                                                    ]),
                                    new Movie_Person([   
                                                        "name" => "Russell",
                                                        "surname" => "Crowe",
                                                        "is_male" => true,
                                                        "role" => "Main Character",
                                                        "nationality" => "New Zealander",
                                                        "url_to_image" => "https://hips.hearstapps.com/hmg-prod/images/russell-crowe-9262435-1-402.jpg"
                                                    ]),
                                    new Movie_Person([   
                                                        "name" => "Mark",
                                                        "surname" => "Strong",
                                                        "is_male" => true,
                                                        "role" => "Side Character",
                                                        "nationality" => "British",
                                                        "url_to_image" => "https://m.media-amazon.com/images/M/MV5BMTUzMjM5NDkyN15BMl5BanBnXkFtZTcwMTU0NDM5OQ@@._V1_.jpg"
                                                    ]),
                                    new Movie_Person([   
                                                        "name" => "Golshifteh",
                                                        "surname" => "Farahani",
                                                        "is_male" => false,
                                                        "role" => "Side Character",
                                                        "nationality" => "Iranian",
                                                        "url_to_image" => "https://upload.wikimedia.org/wikipedia/commons/8/8a/Golshifteh_Farahani_C%C3%A9sars_2014_2.jpg"
                                                    ]),
                                    new Movie_Person([   
                                                        "name" => "Oscar",
                                                        "surname" => "Isaac",
                                                        "is_male" => true,
                                                        "role" => "Side Character",
                                                        "nationality" => "Guatemalan",
                                                        "url_to_image" => "https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/oscar-isaac-1649681813.jpg"
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