<?php

//require_once 'classes/Product.php';
//require_once 'classes/IGadget.php';
//require_once 'classes/NotebookProduct.php';
//require_once 'classes/BookProduct.php';

function autoloder($class)
{
    $file = __DIR__ . "/classes/{$class}.php";
    if(file_exists($file)){
        require_once $file;
    }
}

spl_autoload_register('autoloder');

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

function offerCase(IGadget $product){
    echo "<p>Laptop bag as a gift for {$product->getName()}!</p>";
}

$notebook = new NotebookProduct('Macbook pro', 3000, 'intel');



$book = new BookProduct('Shine', 25, 20);
$notebook = new NotebookProduct('Macbook pro', 2900, 'intel');

//offerCase($book);
offerCase($notebook);

echo $notebook->getProduct();
echo $book->getProduct();