<?php

//require_once 'classes/File.php';    // путь к файлу с классом
//$file = new file(__DIR__ . '/file.txt');    //файл в который происходит запись
//
//$file ->write("line 1");
//$file ->write("line 2");    //вызов финкции запись
//$file ->write("line 3");
//$file ->write("line 4");

require_once 'classes/File.php';
$fpath = new File(__DIR__. '/file.txt');

$fpath->write('text1');
$fpath->write('text1');
$fpath->write('text1');
$fpath->write('text1');