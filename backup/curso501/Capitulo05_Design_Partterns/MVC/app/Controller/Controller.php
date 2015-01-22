<?php
namespace Controller;


use View\View;
class Controller
{
    private $template;
    private $dados;
    private $model;
    
    /**
     * 
     * Toda requisicao deve possuir os seguintes parametros
     * model=nome da Model&action=Nome da Action
     * Porem pode nao vir nenhum parametro, ou seja, primeiro acesso(index)
     */
    public function __construct()
    {
        if(! isset($_GET['model'])){
            $model = 'Funcionarios';
        }else {
            $model = ucfirst($_GET['model']);
        }
        
        if(! isset($_GET['action'])){
            $action = 'gerenciar';
        }else {
            $action = $_GET['action'];
        }
  
        #model=Funcionarios&action=gerenciar
        
        $this->template = strtolower($model) . "/$action";
         
        $model = "Model\\$model";
          
        $this->model = new $model();
        $this->dados = $this->model->$action();        
        
        View::carregar($this->template, $this->dados);
       
    }
}