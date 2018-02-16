# laravel-angular
A Laravel app built with MySQL and Angular.
For demonstration purposes and a tutorial.
Laravel provides the RESTful API. Angular provides the frontend and accesses the API.

# Doctrine Generator.php
A Doctrine Annotation generator.
1. Sintaxe: php generator.php

## Requirements

- PHP >= 5.5.9
- Apache
- MariaDB (PHPMyAdmin)
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension


## Installation

1. Clone the repository: `git clone https://github.com/alexandrellemes/laravel-angular.git project-name`
2. `cd project-name`
3. `composer install`
4. Create a database and inform .env (copy a .env.example to .env file)
5. `php artisan migrate --seed` to create and populate tables
6. `php artisan serve` to start the app on http://localhost:8000/
7. Or run a script `./otimize.sh`
8. Run application in your browser.

## Tutorial Series (PT-BR)

This repo corresponds to the Laravel and AngularJS tutorial on [thbastos.com - Criando uma aplicação com Laravel 5 e AngularJS](http://thbastos.com/blog/criando-uma-aplicacao-com-laravel-5-e-angularjs-1-instalar-e-configurar) PT-BR

Tutorial topics
- [Criando uma aplicação com Laravel 5 e AngularJS 1 - Instalar e configurar](http://thbastos.com/blog/criando-uma-aplicacao-com-laravel-5-e-angularjs-1-instalar-e-configurar)
- [Criando uma aplicação com Laravel 5 e AngularJS 2 - Model e migrations](http://thbastos.com/blog/criando-uma-aplicacao-com-laravel-5-e-angularjs-2-model-e-migrations)
- [Criando uma aplicação com Laravel 5 e AngularJS 3 - API REST](http://thbastos.com/blog/criando-uma-aplicacao-com-laravel-5-e-angularjs-3-api-rest)
- [Criando uma aplicação com Laravel 5 e AngularJS 4 - Integrando com o AngularJS (Final)](http://thbastos.com/blog/criando-uma-aplicacao-com-laravel-5-e-angularjs-4-integrando-com-o-angularjs-final)

Happy Todo-ing!

![lista-contatos-demo](http://thbastos.com/sites/default/files/aplicacao-laravel-5-angularjs-demo.jpg)

#TODO
1. Configure Doctrine migrations
2. Doctrine Auth Users
