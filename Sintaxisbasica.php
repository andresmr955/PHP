<?php

//Asignacion

$num = 9;// se asigna usando el signo = 

$lang = [ 
    'es' => 'Espanol',
    'en' => 'Ingles'
];
//Aritmetica

echo "Suma 2 + 2 " . ((int) 2 + (int)2);
echo "Resta 2 - 2 " . ((int) 2 - (int)2);
echo "Multiplica 2 * 2 " .  2 * 2;
echo "Divide 2 / 2 " .  2 / 2;
echo "Modulo 2 % 2 " .  2 % 2; //Nos brinda el residuo de la division
echo "Exponencial 2 * 2 " .  2 ** 2;

//Comparacion
//Igual ==, valor "9" == 9 True
//Igual ==, tipo,valor 9 === 9 True
// Diferencias !=, valor 
// Diferencias !== valor - tipo
// <, >, <=, >=

//Variables Variables
$app = 'name';
$name = 'platzi';
echo $$app; // Valor dinamico porque puedo llamar app pero el resultado seria platzi

