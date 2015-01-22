<?php
namespace ClasseA;
class ContaA
{}

trait TraitA
{}

namespace ClasseB;

class ContaA
{}

class TraitA
{}

$objClasseA = new ContaA();
var_dump($objClasseA);
echo '<hr>';
$objClasseANamespaceA = new \ClasseA\ContaA();
var_dump($objClasseANamespaceA);
$date = new \DateTime($time, $object);

