<?php

use classes\BookProduct;
use classes\interfaces\IGadget;
use classes\NotebookProduct;

function auto_loader1($class)
{
    $class = str_replace("\\", '/', $class);
    $file = __DIR__ . "/{$class}.php";
    if (file_exists($file)) {
        require_once $file;
    }
}

//function auto_loader2($class){
//    $file = __DIR__."/classes/interfaces/{$class}.php";
//    if(file_exists($file)){
//        require_once $file;
//    }
//}

spl_autoload_register('auto_loader1');
//spl_autoload_register('auto_loader2');


function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

function offerCase(IGadget $product)
{
    echo "<p>Laptop bag as a gift for {$product->getName()}!</p>";
}

$notebook = new NotebookProduct('Macbook pro', 3000, 'intel');


$book = new BookProduct('Shine', 25, 20);
$notebook = new NotebookProduct('Macbook pro', 2900, 'intel');


offerCase($notebook);

echo $notebook->getProduct();
echo $book->getProduct();