<?php

namespace MF\init;

abstract class Bootstrap{

    private $routes;

    abstract protected function initRoutes();

	public function __construct() {
		$this->initRoutes();
		$this->run($this->getUrl());
	}

	public function getRoutes() {
		return $this->routes;
	}

	public function setRoutes(array $routes) {
		$this->routes = $routes;
	}

	protected function run($url) {
        
		foreach ($this->getRoutes() as $key => $route) {
			
            if($url == $route['route']) {
				
                $class = "App\\Controllers\\".ucfirst($route['controller']);

				$controller = new $class;
				
				$action = $route['action'];

				$controller->$action();
			}
		}
	}

	protected function getUrl() {
		return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	}
}
/**
 * Esta classe responsável por executar o script de inicialização da aplicação.
 * Trata-se de uma classe abstrata (abstract class), isto é, uma classe que não
 * pode ser instanciada, apenas herdada.
 */