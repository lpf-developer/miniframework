<?php

namespace App\Controllers;

use MF\Controller\Action;

class IndexController extends Action{

    public function index(){
       $this->view->data = ['pé-de-moleque', 'suspiro'];
        $this->render('index', 'layout1');
    }
    
    public function sobreNos(){
         $this->view->data = ['notebooks', 'smartphones'];
        $this->render('sobreNos', 'layout2');
    }   
}

