<?php

include_once "Kinds/TigerKind.php";
include_once "Traits/HasClaws.php";

class AmurTiger implements TigerKind
{
    use HasClaws;

    function hunt()
    {
        echo "Amur tiger is hunting";
    }

    function move()
    {
        echo "Amur tiger is moving";
    }

    function eat()
    {
        echo "Amur tiger is eating";
    }

    function sleep()
    {
        echo "Amur tiger is sleeping";
    }

    function fight()
    {
        echo "Amur tiger is fighting";
    }

    function wait()
    {
        echo "Amur tiger is waiting";
    }
}