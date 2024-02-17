<?php

use CodeIgniter\Router\RouteCollection;


/**
 * @var RouteCollection $routes
 */


    

    $routes->get('categoria/getlistadoCB', 'Categoria::getjson_ListadoCategorias/');
    $routes->get('marca/getlistadoCB/', 'Marca::getjson_ListadoMarcasCB/');
    $routes->get('producto/getListado', 'Producto::getjson_ListadoProductos/data');


    $routes->post('producto/add', 'Producto::insertProducto');
    $routes->post('producto/update/(:num)', 'Producto::updateProducto/$1');
    $routes->get('producto/delete/(:num)', 'Producto::deleteProducto/$1');