<?php

require 'bootstrap.php';

$banco = new Lib\Banco();
$banco->conectar();
var_dump($banco->getConn());