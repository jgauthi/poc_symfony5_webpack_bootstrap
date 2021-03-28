# POC Symfony 5
## Prerequisites

* The PHP version must be greater than or equal to PHP 8.0
* The SQLite 3 extension must be enabled
* The JSON extension must be enabled
* The Ctype extension must be enabled
* The date.timezone parameter must be defined in php.ini
* Yarn command line

More information on [symfony website](https://symfony.com/doc/5.2/reference/requirements.html).

## Features developed
[Webpack Encore](https://symfony.com/doc/5.2/frontend.html) is a simpler way to integrate Webpack into your application. It wraps Webpack, giving you a clean & powerful API for bundling JavaScript modules, pre-processing CSS & JS and compiling and minifying assets. Encore gives you professional asset system that’s a delight to use.

Encore is inspired by Webpacker and Mix, but stays in the spirit of Webpack: using its features, concepts and naming conventions for a familiar feel. It aims to solve the most common Webpack use cases.

## Installation
Command lines:

```bash
# clone current repot
composer install

# (optional) Copy and edit configuration values ".env.local"

php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate -n

# Optional
php bin/console doctrine:fixtures:load -n

# Installation Assets
yarn install
run yarn encore dev
#yarn encore production # for production
```

For the asset symlink install, launch a terminal on administrator in windows environment.

## Usage
Just execute this command to run the built-in web server _(require [symfony installer](https://symfony.com/download))_ and access the application in your browser at <http://localhost:8000>:

```bash
# Dev env
symfony server:start

# Test env
APP_ENV=test php -d variables_order=EGPCS -S 127.0.0.1:8000 -t public/
```

Alternatively, you can [configure a web server](https://symfony.com/doc/current/cookbook/configuration/web_server_configuration.html) like Nginx or Apache to run the application.
