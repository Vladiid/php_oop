<?php

use app\{BookProduct,NotebookProduct};
use wfm\interfaces\IGadget;

require_once __DIR__.'/vendor/autoload.php';


//function auto_loader($class)
//{
//    $class = str_replace("\\", '/', $class);
//    $file = __DIR__ . "/{$class}.php";
//    if (file_exists($file)) {
//        require_once $file;
//    }
//}

//spl_autoload_register('auto_loader');

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


//offerCase($notebook);

//echo $notebook->getProduct();
echo $book->getProduct();

$mail = new \PHPMailer\PHPMailer\PHPMailer();
