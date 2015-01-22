<?php
class Alunos implements Iterator
{
    protected $dados =  array();
    public $key = 0;
    
    public function __construct(array $dados)
    {
        echo "<hr>Metodo acessado: " . __METHOD__ . "<hr>";
        $this->dados = $dados;
    }
    
    public function key()
    {
        echo "<hr>Metodo acessado: " . __METHOD__ . "<hr>";
        return $this->key;
    }
    
    public function current()
    {
        echo "<hr>Metodo acessado: " . __METHOD__ . "<hr>";
        return $this->dados[$this->key];
    }
    
    public function rewind()
    {
        echo "<hr>Metodo acessado: " . __METHOD__ . "<hr>";
        return $this->key = 0;
    }
    
    public function next()
    {
        echo "<hr>Metodo acessado: " . __METHOD__ . "<hr>";
        return $this->key++;
    }
    
    public function valid()
    {
        echo "<hr>Metodo acessado: " . __METHOD__ . "<hr>";
        return isset($this->dados[$this->key]);    
    }   
}

$dados = array(
	'Aline dos Santos',
    'Patricia Costa',
    'Jessica Lima',
    'Joyce de Souza'
);

$alunos = new Alunos($dados);

foreach ($alunos as $aluno){
    echo $aluno . "<br>";
}