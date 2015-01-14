<?php

namespace ClasseA;
Class ContaA
{}

trait TraitA
{}

namespace ClasseB;
//use ClasseA\ContaA;
Class ContaA
{}

class TraitA
{}

$objClasseA = new ContaA();
var_dump($objClasseA);
echo '<hr>';

$objClaseANamespaceA = new \ClasseA\ContaA();
var_dump($objClaseANamespaceA);

echo '<hr>';

$date = new \DateTime($time, $object);
var_dump($date);



