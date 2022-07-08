<?php
include __DIR__ . '/classes/Products.php';
include __DIR__ . '/classes/Food.php';
include __DIR__ . '/classes/Toys.php';
include __DIR__ . '/classes/Kennels.php';



$prodotto_cibo = new Food('gattox', 30, 'fogie9840', 'gattigatti', 150, '1500kc', 'liquido', '3 luglio 2023');
var_dump($prodotto_cibo);

$prodotto_toy = new Toys('toydog', 300, 'fogiexggfx9840', 'canicani', 150, '300', 'plastica');
var_dump($prodotto_toy);

$prodotto_kennel = new Kennels('doghouse', 3000, 'sdsfd54dsf564', 'canicanicanicani', 15, '3000', 'legno', '500m');
var_dump($prodotto_kennel);