<?php

//require_once 'classes/File.php';    // путь к файлу с классом

//$file = new file(__DIR__ . '/file.txt');    //Вызов экземпляра класса, файл в который происходит запись
//
//$file ->write("line 1");
//$file ->write("line 2");    //вызов финкции запись
//$file ->write("line 3");
//$file ->write("line 4");

require_once 'classes/File.php';

$file = new File(__DIR__.'/file.txt');

$file->write('line1');
$file->write('line2');
$file->write('line3');
$file->write('line4');