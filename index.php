<?php

function addToFile($filename, $data){
    $file = fopen($filename, 'a');
    $str = "\n";
    if(is_array($data)){
        foreach ($data as $item)
            $str .= $item . "\n";
    }
    else{
        $str .= $data;
    }
    fwrite($file, $str);
    fclose($file);
}

function getFromFile($filename){
    $file = fopen($filename, 'r');
    $str = readfile($file);
    return preg_split("/[\s,]+/", $str);
}

addToFile("data.txt", "Hello World");
addToFile("data.txt", array("My", "new", "program"));

print_r(getFromFile("data.txt"));
