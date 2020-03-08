<?php

include_once "Kinds/CatKind.php";
include_once "Traits/HasClaws.php";

class ScottishFoldCat implements CatKind
{
    use HasClaws;

    function purr()
    {
        echo "Scottish fold cat is purring";
    }

    function move()
    {
        echo "Scottish fold cat is moving";
    }

    function eat()
    {
        echo "Scottish fold cat is eating";
    }

    function sleep()
    {
        echo "Scottish fold cat is sleeping";
    }

    function fight()
    {
        echo "Scottish fold cat is fighting";
    }

    function wait()
    {
        echo "Scottish fold cat is fighting";
    }

}