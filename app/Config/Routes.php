<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//deber semana 7
$routes->get('/deber', 'Home::libros');

//buscador
$routes->post('/buscar', 'Home::buscar');

//temas ajax
$routes->post('/obtenerLibros', 'Home::obtenerLibros');