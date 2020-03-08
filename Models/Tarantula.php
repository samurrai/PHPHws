<?php

include_once "Kinds/SpiderKind.php";
include_once "Traits/HasEightLegs.php";

class Tarantula implements SpiderKind
{
    use HasEightLegs;

    function makeWeb()
    {
        echo "Tarantula is making web";
    }

    function move()
    {
        echo "Tarantula is moving";
    }

    function eat()
    {
        echo "Tarantula is eating";
    }

    function sleep()
    {
        echo "Tarantula is sleeping";
    }

    function fight()
    {
        echo "Tarantula is fighting";
    }

    function wait()
    {
        echo "Tarantula is fighting";
    }
}