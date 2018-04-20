<?php
/**
 * This file hold all routes definitions.
 *
 * PHP version 7
 *
 * @author   WCS <contact@wildcodeschool.fr>
 *
 * @link     https://github.com/WildCodeSchool/simple-mvc
 */

$routes = [
    'Item' => [ // Controller

        ['add', '/item/add', 'GET'], // action, url, method
        ['edit', '/item/edit/{id:\d+}', 'GET'], // action, url, method
        ['show', '/item/{id:\d+}', 'GET'], // action, url, method
        ['contact', '/contact', ['POST', 'GET']],
],

'Portfolio' => [ // Controller
    ['index', '/portfolio', 'GET'],
    ['adminCreate', '/portfolio/create', ['GET','POST']], // action, url, method
    ['adminChange', '/portfolio/change', ['GET','POST']],
    ['chantier', '/porfolio/chantier/{id:\d+}', 'GET'], // action, url, method
],
'tetraDigital' => [ // Controller
    ['tetradigital', '/', 'GET'],
    ['login', '/login', ['GET','POST']]

  ],

];