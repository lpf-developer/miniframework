# Mini Framework PHP

Esta aplicação trata-se de um miniframework PHP. Um Framework é um conjunto de 
classes destinadas a um propósito específico.  
O diretório `vendor` foi incluído no arquivo `.gitignore`, ou seja, ele não foi 
versionado. Este diretório guarda as informações das dependências adcionadas a
partir do gerenciador de dependências `composer`, dependências estas necessárias
para a execução da aplicação. Antes de proceder com o uso do mini framework,
será necessário digitar, dentro do diretório da aplicação, o seguinte comando:

> composer update


## Árvore de diretórios

    .
    ├── App
    |    ├── Controllers
    |    │   ├── indexController.php
    |    │   ├── arquivo2.txt
    |    │   └── arquivo3.txt
    |    ├── MF
    |    │   └── init
    |    |       └── Bootstrap.php
    |    ├── Models
    |    |   ├── arquivo6.txt
    |    |   └── arquivo7.txt
    |    └── Views
    |        ├── arquivo6.txt
    |        └── arquivo7.txt
    ├──  Public
    |    ├── .htaccess
    |    └── index.php
    |
    ├── .gitignore
    ├── composer.json
    └── Readme.md

## O arquivo composer.json - passo 1

```json
{
	"name": "lpf-developer/miniframework",
	"require": {
		"php": ">= 7.0",
		"symfony/var-dumper": "^6.2"
	},
	"authors": [
		{
			"name": "Jorge Sant Ana",
			"email": "jorge@teste.com.br"
		}
	],
	"autoload": {
		"psr-4": {
			"App\\": "App/",
			"MF\\": "App/MF/"
		}
	}
}
```

## O arquivo App/MF/init/Bootstrap.php - passo 2

```php
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
```

## O arquivo App/Route.php - passo 3

```php
<?php

namespace App;

use MF\init\Bootstrap;

class Route extends Bootstrap{

    protected function initRoutes() {

		$routes['home'] = array(
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'index'
		);

		$routes['sobre_nos'] = array(
			'route' => '/sobre_nos',
			'controller' => 'indexController',
			'action' => 'sobreNos'
		);

		$this->setRoutes($routes);
	}
}
```

## O arquivo App/Controllers/IndexController.php - passo 4

```php
<?php

namespace App\Controllers;

class IndexController{

    public function index(){
        echo "Método index acionado";
    }

    public function sobreNos(){
        echo "Método sobreNos acionado";
    }
}
```

