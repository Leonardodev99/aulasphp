<?php
//$cars = array(1, 'Tiago', 12.3);
//$cars = [1, 'Tiago', 12.3];
/*$cars = [
    'cor' => 'Preto',
    'porta' => 4,
    'ano' => 2018
];
//var_dump($cars);
echo $cars['porta'];*/
$cars = [
    'Mercedes' => [
        'color' => 'black',
        'motor' => 5.2,
        'name' => 'nome do carro da mercedes'
    ],
    'Ford' => [
        'color' => 'yellow',
        'motor' => 3.2,
        'name' => 'nome do carro da ford'
    ],
    'Ferrari' => [
        'color' => 'red',
        'motor' => 10,
        'name' => 'nome do carro da ferrari'
    ],
];
echo $cars['Ford']['name'];