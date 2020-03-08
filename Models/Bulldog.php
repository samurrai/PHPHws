<?php

include_once "Kinds/DogKind.php";
include_once "Traits/CanBark.php";

class Bulldog implements DogKind
{

    use CanBark;

    function dig()
    {
        echo "Bulldog is digging";
    }

    function move()
    {
        echo "Bulldog is moving";
    }

    function eat()
    {
        echo "Bulldog is eating";
    }

    function sleep()
    {
        echo "Bulldog is sleeping";
    }

    function fight()
    {
        echo "Bulldog is fighting";
    }

    function wait()
    {
        echo "Bulldog is fighting";
    }
}