<?php
namespace Controller;

use View\View;


class Controller
{

    private $template;

    private $dados;
    // criar metodo na action necessita de template
    // echo 'model:'. $model;
    // echo '<br />Action:' . $action;
    // odel = funcionarios&action=gerenciar
    
    /*
     * Toda requisicao deve possuir os seguintes parametros model=Nome da Model&action=Nome da action Porem pode nao vir , ou seja primeiro acesso (index)
     */
    public function __construct($tipo)
    {
        $this->template = "$tipo/index";
        
        if (! isset($_GET['model'])) {
            
            $model = "Model\\" . ucfirst($_GET['model']);
            
             $this->model = new $model();
        }
        
        if (! isset($_GET['action'])) {
            
            $action = $_GET['action'];
            
            $this->template = strtolower("$tipo/{$_GET['model']}/$action");
        }
        
        /*
         * echo 'Model' . $model; echo '<br>Action' . $action; echo '<br>template' . $this->template; echo '<br>Dados' . $this->dados; exit();
         */
        // criar metodo na action necessita de template
        // echo 'model:'. $model;
        // echo '<br />Action:' . $action;
        // odel = funcionarios&action=gerenciar
        
        View::carregar($this->template, $tipo, $this->dados);
    }
}
