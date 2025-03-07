<?php
/*$names = ['Leo', 'Duinor', 'year'];''
$name = 'Leonardo';
$company = 'Duinor';
$year = 2017;

$inforCompany = [
    'name' => 'Duinor', 
    'founder' => 'Leonardo Tiago', 
    'year' => 2018,
];

//$inforCompany = compact('name', 'company', 'year');

//var_dump(is_array($name));
//var_dump(is_array($inforCompany));
//var_dump(in_array('Leonardo', $inforCompany));
//var_dump(array_keys($inforCompany));
//var_dump(array_values($inforCompany));
//var_dump(count($inforCompany));

$inforCompanyTwo = [
    'courses' => ['PHP', 'JS', 'Vue js', 'Laravel'],
    'total_courses' => 26,
];

$infoCompany = array_merge($inforCompany, $inforCompanyTwo);

echo '<pre>';

var_dump($infoCompany);*/

/*echo '<br>';

array_pop($cart);
echo '<pre>';
var_dump($cart);

array_shift($cart);

echo '<br>';
echo '<pre>';
var_dump($cart);

unset($cart[0]);
echo '<br>';
echo '<pre>';
var_dump($cart);

array_push($cart, 'Tapete');
array_push($cart, 'Couve');
echo '<br>';
echo '<pre>';
var_dump($cart);

array_unshift($cart, 'Batata');
echo '<br>';
echo '<pre>';
var_dump($cart);

array_unshift($cart, 'Tapete');
echo '<br>';
echo '<pre>';
var_dump($cart);


$cart = array_unique($cart);
echo '<br>';
echo '<pre>';
var_dump($cart);*/

/*arsort($cart);

echo '<br>';
echo '<pre>';
var_dump($cart);

asort($cart);
echo '<br>';
echo '<pre>';
var_dump($cart);

sort($cart);
echo '<br>';
echo '<pre>';
var_dump($cart);*/

/*$cart = ['Arroz', 'Sabao', 'Feijao', 'Balinhas'];

echo '<pre>';
var_dump($cart);

$cart = end($cart);
echo '<br>';
echo '<pre>';
var_dump($cart);*/

/*$ages = [12, 14, 18, 20, 44, 50, 98, 78, 56];

$agesFiltered = array_filter($ages, function($ages) {
    return $ages >= 18;
});

echo '<pre>';
var_dump($agesFiltered);*/

$cart = ['Arroz', 'Sabao', 'Feijao', 'Balinhas'];

/*
$cart[0] = strtoupper($cart[0]);
$cart[1] = strtoupper($cart[1]);
$cart[2] = strtoupper($cart[2]);
$cart[3] = strtoupper($cart[3]);
*/

$cart = array_map(function ($cart) {
    return strtoupper($cart);
}, $cart);
echo '<pre>';
var_dump($cart);