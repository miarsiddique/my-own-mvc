<?php 

/* $router->define([
   '/' => 'controllers/index.php',
   'about-us' => 'controllers/about.php',
   'culture' => 'controllers/about-culture.php',
   'contact-us' => 'controllers/contact.php',
   'names' => 'controllers/add-name.php',
]); */


$router->get('', 'controllers/index.php');
$router->get('about-us', 'controllers/about.php');
$router->get('culture', 'controllers/about-culture.php');
$router->get('contact-us', 'controllers/contact.php');
$router->post('names', 'controllers/add-name.php');
