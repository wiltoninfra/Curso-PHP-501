<?php
#namespace - semelhante a diretorios

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
var_dump($objClasseA );
echo "<hr>";

$objClasseANameespaceA = new \ClasseA\ContaA();
var_dump($objClasseANameespaceA);

