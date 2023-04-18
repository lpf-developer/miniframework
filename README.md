# Mini Framework PHP

Esta aplicação trata-se de um miniframework PHP. Um Framework é um conjunto de 
classes destinadas a um propósito específico.

## Árvore de diretórios

    .
    ├── App
    |    ├── Controllers
    |    │   ├── indexController.php
    |    │   ├── arquivo2.txt
    |    │   └── arquivo3.txt
    |    ├── MF
    |    │   ├── arquivo4.txt
    |    │   └── arquivo5.txt
    |    ├── Models
    |    |   ├── arquivo6.txt
    |    |   └── arquivo7.txt
    |    └── Views
    |        ├── arquivo6.txt
    |        └── arquivo7.txt
    |
    ├──  Public
    |    ├── .htaccess
    |    └── index.php
    |
    ├── .gitignore
    ├── composer.json
    └── Readme.md
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

