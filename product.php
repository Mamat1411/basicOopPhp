<?php

class Product{
    public $title = 'title',
           $author = 'author',
           $publisher = 'publisher',
           $price = 0;
}

$product1 = new Product();
$product1 -> title = 'Naruto';
$product1 -> author = 'Masashi Kishimoto';
$product1 -> publisher = 'Shonen Jump';
$product1 -> price = 30000;

var_dump($product1);

?>