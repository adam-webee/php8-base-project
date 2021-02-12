## PHP 8 Project Template

This is a template of PHP 8 project. You can use it to start with your own PHP project.
Inside this template you will find:
* composer file with basic libraries defined,
* configuration file for php-cs-fixer,
* configuration file for PHPUnit,
* configuration file for Kahlan,
* code samples that you can start with.

## Before you start
This template use Composer for dependency management. To download all dependent code you need call this command:
```bash
composer install
```

Or if you want tu update (outdated packages):
```bash
composer update
```

## Structure

* "/src" - your code goes here
* "/test" - here yo will put all of your phpunit tests
* "/spec" - and this is a place for kahlan spec files

Directories "vendor" and "docs" are technical ones and you don't need to make any changes in them.

Remember to change your namespace. This project template use "WeBee" namespace.

## How to run tools
### PHPUnit
To run all tests execute bellow command:
```
./vendor/bin/phpunit
```
According to template configuration this command will also generate coverage report. It will be placed in "docs/coverage-report" directory.

WARNING: Code coverage needs to be enabled in php.ini by setting 'xdebug.mode' to 'coverage'.

### Kahlan
To run all spec files execute this command:
```bash
./vendor/bin/kahlan
```

### php-cs-fixer
To fix all code standards violations run below command:
```
./vendor/bin/php-cs-fixer fix
```

If you only want to see all violations just run this command:
```
./vendor/bin/php-cs-fixer --dry-run --diff fix
```

## External sources
### Documenting the code
* https://www.phpdoc.org
* https://github.com/phpDocumentor/phpDocumentor2

### Markdown to be used to write README.md (and not only)
* https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet

### PHP Coding standards
* https://www.php-fig.org/psr/
* https://github.com/FriendsOfPHP/PHP-CS-Fixer

### PHP Unit testing
* https://phpunit.readthedocs.io/
* https://kahlan.github.io/docs/

### Dependency management
* https://getcomposer.org/doc/
* https://packagist.org
