### Examples of design patterns in PHP 7.4

#### Document

Example system for creating abstract documents and exporting them in various formats.

pattern: **Abstract Factory** (see branch 'factory-method-version' for **Factory Method**)

pattern overview: 

Client uses Abstract Factory for producing Products, and operates on them using Product Interface. Client isn't aware of which concrete factory, or Product it uses. It is configured at runtime with one of Concrete Factories. 

This helps to separate general document generation logic from a format specific details.

![Document diagram](diagrams/Document.png)

Example use case: `public/index.php`

#### Environment

You can use docker container with php 7.4 if you wish:

`cd <<project directory>>`

install dependencies (phpunit), configure autoloading: `docker-compose run php-dev composer install`

run project: `docker-compose run php-dev php public/index.php`

run tests: `docker-compose run php-dev php vendor/phpunit/phpunit/phpunit --color=always test/DocumentTest.php`

#### Note about testing

There is one high level test, that checks if exporting is working as expected. 

It uses most external api, and therefore indirectly tests if all layers of application works properly, with a small amount of work. It also supports refactoring, because it doesn't have to be changed while implementation details changes. It works for both Abstract Factory and Factory Method (branch 'factory-method-version') versions.

I think it is important to maintain proper balance between high level and isolated tests. Isolated are good for classes with complex logic, and many cases to check without engaging all application layers.    