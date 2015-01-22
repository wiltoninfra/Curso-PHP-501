<?php

namespace Controller;


use View\View;

class Controller
{
    use Controller\FuncionariosController;
    
    private $template;
    private $dados;
    private $model;
    
    /**
     *Toda requisicao deve possuir os seguintes parametros
     *model = nome da Model&action= noe da action
     *porem pode nao vir nenhum parametro, ou seja prieiro acesso (index)
     */
    
	public function __construct()
	{
		if(! isset($_GET['model'])){
			$model = 'Funcionarios';
		}else{
			$model = ucfirst($_GET['model']);
		}
		if (! isset($_GET['action'])) {
		    $action = 'gerenciar';
		}else{
		    $action = $_GET['action'];
		}
		
		$this->template = strtolower($model) . "/$action";
		$model = "Model\\$model";
		
		$this->model = new $model();
		$this->dados = $this->model->$action();
		
		View::carregar($this->template, $this->dados);
		
	}
}