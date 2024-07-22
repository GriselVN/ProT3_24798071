<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acercade', 'Home::acerca_de');
$routes->get('registrar', 'Home::registrar');
$routes->get('login', 'Home::login');

$routes->get('/registrar','usuario_controller::create');
$routes->post('/enviar-form','usuario_controller::formValidation');

$routes->get('/login', 'login_controller');
$routes->post('/enviarlogin','login_controller::auth');
$routes->get('/panel', 'panel_controller::index',['filter'=>'auth']);
$routes->get('/logout', 'login_controller::logout');

