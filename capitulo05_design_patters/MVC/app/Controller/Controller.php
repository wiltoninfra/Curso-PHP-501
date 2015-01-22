<?php
namespace Controller;

use View\View;

class Controller
{

    private $template;

    private $dados;

    private $model;

    /**
     * Toda requisicao deve possuir os seguintes parametros
     * model=nome da Model&action=Nome da Action
     * Porem pode nao vir nenhum parametro, ou seja, primeiro acesso(index)
     */
    public function __construct()
    {
        if (! isset($_GET['model'])) {
            $model = 'Funcionarios';
        } else {
            $model = ucfirst($_GET['model']);
        }
        
        if (! isset($_GET['action'])) {
            $action = 'gerenciar';
        } else {
            $action = $_GET['action'];
        }
        // http://192.168.203.86/Curso%20501/Capitulo05_Design_Patterns/MVC/?model=clientes&action=cadastrar
        echo $model;
        echo '<br>';
        echo $action;
        
        exit();
        
        // odel=Funcionarios&action=gerenciar
        
        $this->template = strtolower($model) . "/$action";
        
        echo '<hr>';
        
        echo "Template: " . $this->template;
        
        $model = "Model\\$model";
        
       
            
        
        $this->model = new $model();
        
        echo '<hr><pre>';
            
            var_dump($this->model);
        
        
        exit();
        $this->dados = $this->model->$action();
        
        View::carregar($this->template, $this->dados);
    }
}