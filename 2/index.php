<?php

require_once 'classes/Product.php';
require_once 'classes/NotebookProduct.php';
require_once 'classes/IGadget.php';
require_once 'classes/BookProduct.php';


function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

function offerCase(IGadget $product){
    echo "<p>Laptop bag as a gift for {$product->getName()}!</p>";
}

var_dump($book instanceof IGadget);
var_dump($notebook instanceof NotebookProduct);

$book = new BookProduct('Shine', 25, 20);
$notebook = new NotebookProduct('Macbook pro', 2900, 'intel');


//offerCase($book);

//offerCase($notebook);