<?php
require_once 'classes/File.php';

$file = new File(__DIR__ . '/file.txt');
$file->write('line 1');
$file->write('line 2');
$file->write('line 3');