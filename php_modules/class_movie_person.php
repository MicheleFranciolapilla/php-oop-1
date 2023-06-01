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
?>