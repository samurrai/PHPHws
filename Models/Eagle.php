<?php

include_once "Kinds/BirdKind.php";
include_once "Traits/CanFly.php";

class Eagle implements BirdKind
{
    use CanFly;

    function fly()
    {
        echo "Eagle is flying";
    }

    function move()
    {
        echo "Eagle is moving";
    }

    function eat()
    {
        echo "Eagle is eating";
    }

    function sleep()
    {
        echo "Eagle is sleeping";
    }

    function fight()
    {
        echo "Eagle is fighting";
    }

    function wait()
    {
        echo "Eagle is fighting";
    }
}