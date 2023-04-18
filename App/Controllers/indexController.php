<?php

namespace App\Controllers;

class IndexController{

    private $view;

    public function __construct(){
        $this->view = new \StdClass();
    }

    public function index(){
       $this->view->data = ['pé-de-moleque', 'suspiro'];
        $this->render('index');
    }
    
    public function sobreNos(){
         $this->view->data = ['notebooks', 'smartphones'];
        $this->render('sobreNos');
    }
    
    public function render(string $view){

        // App\Controllers\IndexController
        $currentClass = get_class($this); 
        
        // IndexController
        $currentClass = str_replace ('App\\Controllers\\', '', $currentClass);
        
        // index
        $currentClass = strtolower(str_replace('Controller', '', $currentClass));
        
        require_once '../app/views/' . $currentClass . '/' . $view . 'View.phtml';
    }
}

/**
 * Uma Standard Class (stdClass) cria um objeto, dinamicamente, para representar
 * o array de dados a ser exibido.
 * 
 * O método render, carrega a página html correspondente ao método solicitado. 
 * Para tal, obtém o nome do diretório por meio da variável $currentClass, bem
 * como o nome da view, fornecida por parâmetro, e o conjunto de dados a ser 
 * exibido.
 */