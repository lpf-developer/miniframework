<?php

namespace App;

class Route{

    public function getUrl(){
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
    public function initRoutes(){
        $routes['home'] = array (
            'route' => '/',
            'controller' => 'indexController',
            'action' => 'index'

        );
        $routes['sobre_nos'] = array (
            'route' => '/sobre_nos',
            'controller' => 'indexController',
            'action' => 'sobreNos'

        );
        
    }
}

/**
 * Função parse_url: retorna um array detalhando os componentes da URL.
 * 
 * A constante PHP_URL_PATH, quando submetida a função parse_url retorna apenas
 * a string relativa ao path, deixando de lado a informação referente à query
 * string, se houver.
 */