<?php 


$text = "The quick brown fox jumps over the lazy dog.";

function newText($text){
    $convert_lower = strtolower($text);
    $modified = str_replace("brown", "red", $convert_lower);
    echo $modified;
}

newText($text);