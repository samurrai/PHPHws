<?php

include_once "Kind.php";

interface SpiderKind extends Kind
{
    function makeWeb();
}