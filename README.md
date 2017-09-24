Symfony Api Rest Example
========================

Welcome to this project where you will find a functional example of a REST API in Symfony 3.

What's inside?
--------------

The Symfony Standard Edition is configured with the following defaults:

  * An AppBundle you can use to start coding;

  * Twig as the only configured template engine;

  * Doctrine ORM/DBAL;

  * Swiftmailer;

  * Annotations enabled for everything;
  
  * CORS configurated by default;
  
  * Enable Doctrine Migrations;
  
  * Enable JMS annotations;


Instalation
--------------

1) Create a database ApiExample

2) $ php bin/console doctrine:migrations:migrate
 
3) $ composer install

4) $ bin/console server:run

Examples
--------------

In this project there are 2 sample REST API calls:

/cars : Returns all cars in the database

/cars/color/{color} : Returns all the cars in the database that are of the color of the paramete

Enjoy!