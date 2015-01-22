<?php
class clientes

{
 public function __toString()
 {
     return __CLASS__;
 }   
    
}


$cliente = new clientes();

echo $cliente;