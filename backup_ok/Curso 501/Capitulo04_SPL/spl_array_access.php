<?php
class Alunos implements ArrayAccess
{
    public  $ra;
    public  $turma;
    public  $curso;
    public  $nome;
    

    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
    
    public function offsetGet($offset)
    {
        echo $offset;
        exit();
        return $this->$offset;
    }
    
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
    
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
    
}

$aluno = new Alunos();

$aluno['ra'] = '102010';
$aluno['turma'] = '2SINA';
$aluno['curso'] = 'Sistemas de Informação';
$aluno['nome']  = 'Priscila Pires';

foreach ($aluno as $propriedade => $valor){
    echo "$propriedade : $valor<br>";
}