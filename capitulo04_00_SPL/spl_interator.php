<?php

class Alunos implements Iterator
{

    protected $dados = array();

    public function __construct(array $dados)
    {
        echo "<hr> Metodo Acessado: " . __METHOD__ . '<hr>';
        $this->dados = $dados;
    }

    public function current()
    {
        echo "<hr> Metodo Acessado: " . __METHOD__ . '<hr>';
        return $this->dados[$this->key];
    }

    public function rewind()
    {
        $this->key = 0;
    }

    public function key()
    {}

    public function next()
    {
        echo "<hr> Metodo Acessado: " . __METHOD__ . '<hr>';
        return $this->key++;
    }

    public function valid()
    
    {
        echo "<hr> Metodo Acessado: " . __METHOD__ . '<hr>';
        return isset($this->dados[$this->key]);
    }
}

$dados = array(
    'Aline dos Santos',
    'Patricia Costa',
    'Amanda Faria',
    'Jsessica Lima'
);

$alunos = new Alunos($dados);

foreach ($alunos as $aluno) {
    echo "$aluno<br>";
}