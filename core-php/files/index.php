<?php 

// echo readfile('file.txt');

// file open
$file = fopen('file.txt', 'r') or die('cannot open file.txt');

echo fread($file,filesize('file.txt'));

fclose($file);

// file open
$file = fopen('file.txt', 'a');

$txt = "\ndsfghjkl;sdfghjkdg \n fhjkdsdfghjkdfghj";

fwrite($file, $txt);

fclose($file);

