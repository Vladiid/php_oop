<?php

require_once 'classes/Product.php';

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

$book = new Product('Shine', 25, null, 370);

$notebook = new Product('Macbook pro', 1799, 'Intel Core I9');

//debug($book);
//debug($notebook);

echo $book->getProduct('book');
echo $notebook->getProduct('notebook');