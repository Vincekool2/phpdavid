<?php

require_once('../config/config.php');

/**
 * @param int $number
 * @return string
 */

$products = [
	
	[
		'name' => 'Frigo',
		'price' => 200,
		'category' => 'electro-menager',
		'description' => 'Description du produit 2',
		'createdAt' => '08-11-2024',
	],
	[
		'name' => 'Vélo',
		'price' => 900,
		'category' => 'sport',
		'description' => 'Description du produit 9',
		'createdAt' => '08-10-2024',
	],
	[
		'name' => 'Four',
		'price' => 300,
		'category' => 'electro-menager',
		'description' => 'Description du produit 3',
		'createdAt' => '19-04-2024',
	],
	
	[
		'name' => 'Ordinateur',
		'price' => 500,
		'category' => 'informatique',
		'description' => 'Description du produit 5',
		'createdAt' => '25-12-2024',
	],
	[
		'name' => 'Tablette',
		'price' => 600,
		'category' => 'informatique',
		'description' => 'Description du produit 6',
		'createdAt' => '28-12-2024',
	],
	[
		'name' => 'Télévision',
		'price' => 400,
		'category' => 'electro-menager',
		'description' => 'Description du produit 4',
		'createdAt' => '12-08-2024',
	],
	[
		'name' => 'Smartphone',
		'price' => 700,
		'category' => 'informatique',
		'description' => 'Description du produit 7',
		'createdAt' => '13-09-2024',
	],
	[
		'name' => 'Appareil photo',
		'price' => 800,
		'category' => 'informatique',
		'description' => 'Description du produit 8',
		'createdAt' => '12-05-2024',
	],

	[
		'name' => 'Tapis de course',
		'price' => 1000,
		'category' => 'sport',
		'description' => 'Description du produit 10',
		'createdAt' => '03-02-2024',
	],
	[
		'name' => 'Aspirateur',
		'price' => 100,
		'category' => 'electro-menager',
		'description' => 'Description du produit 1',
		'createdAt' => '12-04-2024',
	],
	[
		'name' => 'Haltères',
		'price' => 1100,
		'category' => 'sport',
		'description' => 'Description du produit 11',
		'createdAt' => '12-03-2024',
	],
	[
		'name' => 'Ballon de foot',
		'price' => 1200,
		'category' => 'sport',
		'description' => 'Description du produit 12',
		'createdAt' => '18-05-2024',
	]
];


$productCategories = [];

foreach($products as $product) {

	if (!in_array($product['category'], $productCategories)) {
		$productCategories[] = $product['category'];
	}

}

$productMinPrice = $products[0]['price'];

foreach($products as $product) {
	if ($product['price'] < $productMinPrice) {
		$productMinPrice = $product['price'];
	}
}


$productMaxPrice = $products[0]['price'];

foreach($products as $product) {
	if ($product['price'] > $productMaxPrice) {
		$productMaxPrice = $product['price'];
	}
}


if (!empty($_GET['category'])) {
	$products = array_filter($products, function($product) {
		return $product['category'] === $_GET['category'];
	});
}

if (!empty($_GET['minPrice'])) {
	$products = array_filter($products, function($product) {
		return $product['price'] >= (float)$_GET['minPrice'];
	});
}

if (!empty($_GET['maxPrice'])) {
	$products = array_filter($products, function($product) {
		return $product['price'] <= (float)$_GET['maxPrice'];
	});
}
if (!empty($_GET['reset'])) {
reset ($products,);
}




// si j'ai un parametre GET "sort" et qu'il est égal à "price"
if (isset($_GET['sort']) && $_GET['sort'] === 'price') {

	// alors j'utilise la fonction PHP usort qui permet de trier un tableau
	// je trie en fonction du prix
	// usort ne retourne pas de nouveau tableau, mais modifie le tableau
	// original ($products)
	usort($products, function ($a, $b) {
		return $a['price'] <=> $b['price'];
	});
}

if (isset($_GET['sortDate']) && $_GET['sortDate'] === 'newest') {

	usort($products, function ($a, $b) {	
		return $dateA = new DateTime($a['createdAt']) <=> $dateB = new DateTime($b['createdAt']);
	});
}


if (isset($_GET['sortDate']) && $_GET['sortDate'] === 'oldest') {

	usort($products, function ($a, $b) {
		return new DateTime($b['createdAt']) <=> new DateTime($a['createdAt']);
	});
}
