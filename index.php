<?php

include_once 'Helpers.php';

$tag = new Tag("a");

$tag->setAttributes("style", "color: red;");

$tag->setAttributes(["href" => "https://google.com"]);

$tag->prependBody("Hello");
$tag->appendBody(" world");

echo $tag;