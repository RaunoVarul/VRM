BCS koolitus - Booking App

====================================================

This web application is the code base for the teachers as a reference when they give their student an assignment to create a web application according to the given tasks using Silex.


Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.


Prerequisites

Needed software in your computer to run this software:



php

sudo apt-get install php7.0-cli
sudo apt-get install php-xml

composer

SQLite

sudo apt-get install php-sqlite3




Installing

To install the software you have following options:

Cloning the project to your computer. If you have ssh access.

git glone git@gitlab.com:i-sepp/bcs-koolitus.git
Or download it manually from the gitlab page.

Then you need to have composer installed in your computer.
And then you need to install composer packages in your project folder.

composer install

Running the tests

You can run the tests by this command:

vendor/bin/phpunit tests

Built With



Silex - The web framework used

Composer - Dependency Management

Twig - Php template engine

Doctrine DBAL - Database connection

PHPUnit - PHP testing framework



Versioning

We use SemVer for versioning.
At the moment we have one version, which is 1.0.0


Authors



Kadri Vahtramäe - Initial work - Kadri Vahtramäe



See also the list of contributors who participated in this project.


License

This project is licensed under the MIT License.