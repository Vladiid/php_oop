<?php

require_once 'classes/Product.php';
require_once 'classes/NotebookProduct.php';
require_once 'classes/BookProduct.php';

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

$book = new BookProduct('Shine', 25, 20);

$notebook = new NotebookProduct('Macbook pro', 100, 'intel');


debug($book);
debug($notebook);

echo $book->getProduct();
echo $notebook->getProduct();