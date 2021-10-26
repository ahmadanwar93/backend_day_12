<?php

    class people{
        public $name;
        public $dob;
        public $hobby;

        function __construct($name,$dob){
            $this -> name  = $name;
            $this -> dob = $dob;
        }

        
        function dob(){
            $age = 2021 - $this -> dob;
            echo "Hi {$this -> name}, you are {$age} years old! You like to confuse yourself with OOP";
        }


    }



?>