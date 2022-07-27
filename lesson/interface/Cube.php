<?php

    interface iCube{
        function __construct($side);
        function getVolume();
    }

    class Cube implements iCube{

        function __construct($side)
        {
            echo "cube construct";
            $this->side = $side;

        }

        function getVolume()
        {
            return $this->side ** 3;
        }
    }


    $cube = new Cube(2);
    echo "cube volume = ".$cube->getVolume();



?>