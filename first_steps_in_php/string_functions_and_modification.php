<?php

$x = "Lokomotiv Plovdiv";
echo strlen($x); # count ch in str
echo "<br>";
echo str_word_count("Hello world!"); # count number of words
echo "<br>";
echo strpos($x, "Lokomotiv"); # If second element exists in the first element, return index from where it starts
echo "<br>";
echo strtoupper($x); # uppercase
echo "<br>";
echo strtolower($x); # lower
echo "<br>";
echo str_replace("Lokomotiv", "Football", $x); # replace string in the sentence
echo "<br>";
echo strrev($x); # reverse string
echo "<br>";
echo trim($x); # remove space in front and in the end

$y = explode(" ", $x); 
print_r($y); # array cannot be print by echo, need to use print_r

echo "<br>";
$x = "Hello";
$y = "World";
$z = $x . ' ' . $y; # . -> concatenate the strings
echo $z;
echo "<br>";
$w = "$x $y"; # f"{} {}" in python
echo $w;

echo "<br>";
echo substr($x, 6, 5);

$x = "Hello World!";
echo substr($x, 6, 5);
echo "<br>";
$x = "Hello World!";
echo substr($x, 6);
echo "<br>";
$x = "Hi, how are you?";
echo substr($x, 5, -3); # slicing by steps
