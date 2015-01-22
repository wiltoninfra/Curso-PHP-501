<?php
namespace Controller;

trait FuncionariosController
{

    public function gerenciar()
    {
        return $this->listarFuncionarios();
    }

    public function cadastrar()
    {
        if ($_POST) {
            
            $this->setDados($_POST);
            
            if ($this->salvar()) {
                
                header('location:index.php');
            }
        }
    }

    public function alterar()
    {
        
     if ($_POST) {
            
            $this->setDados($_POST);
            
            if ($this->salvar()) {
                
                header('location:index.php');
            }
        }
        return $this->buscarPorId($_GET['id']);
    } 

    
    public function excluir()
    {
       if($this->excluirFuncionario($_GET['id'])) {
           header('location:index.php');
       }
        
        
    }
}