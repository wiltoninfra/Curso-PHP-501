<?php
namespace Controller;

use View\View;

class Controller
{

    private $template;

    private $dados;
    
    /* 
     * Toda requisicao deve possuir os seguintes parametros model=Nome da Model&action=Nome da action Porem pode nao vir , ou seja primeiro acesso (index)
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
        //criar metodo na action necessita de template
        // echo 'model:'. $model;
        // echo '<br />Action:' . $action;
        // odel = funcionarios&action=gerenciar
        
        $this->template = strtolower($model) . "/$action";
        
        $model = "Model\\$model";
        
        $this->model = new $model();
        
        $this->dados = $this->model->$action();
        
        View::carregar($this->template, $this->dados);
    }
}