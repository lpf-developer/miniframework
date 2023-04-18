# Mini Framework PHP

Esta aplicação trata-se de um miniframework PHP. Framework é um conjunto de 
classes destinadas a um propósito específico.

Este framework é composto pela seguinte árvore de diretórios

App
| ---- Controllers
| ---- MF
| ---- Models
| ---- Views
Routes.php

Public
|
index.php

Readme.md
.gitignore

## O arquivo composer.json

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

