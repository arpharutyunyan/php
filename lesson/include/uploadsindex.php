<!-- <?php

$text = file_get_contents("test.txt");

file_put_contents("test.txt", pow($text, 2));

copy("test.txt", "copy.txt");

unlink("test.txt");
copy("copy.txt", "test.txt");

echo filesize("test.txt");

var_dump(file_exists("test.txt"));
var_dump(file_exists("text.txt"));

mkdir("diraction");
//rmdir("diraction");
$files = scandir("diraction");
var_dump($files);

$path = "test.txt";
var_dump(is_file($path));
var_dump(is_dir($path));

echo "<br>";
?> -->

<?php
file_put_contents("test.txt", "!");

?>