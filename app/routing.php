<?php
/**
 * This file hold all routes definitions.
 *
 * PHP version 7
 *
 * @author WCS <contact@wildcodeschool.fr>
 *
 * @link https://github.com/WildCodeSchool/simple-mvc
 */

$routes = [


    'Portfolio' => [ // Controller
    ['index', '/portfolio', 'GET'],
    ['adminCreate', '/portfolio/create', ['GET','POST']], // action, url, method
    ['adminChange', '/portfolio/change', ['GET','POST']],
    ['adminEdit', '/porfolio/edit/{id:\d+}', 'GET'], // action, url, method
    ['chantier', '/porfolio/chantier/{id:\d+}', 'GET'], // action, url, method
    ],

    'Blog' => [ // Controller
    ['index', '/blog', 'GET'],
    ['adminCreate', '/blog/create', ['GET','POST']], // action, url, method
    ['adminChange', '/blog/change', ['GET','POST']],
    ['chantier', '/blog/article/{id:\d+}', 'GET'], // action, url, method
    ],

    'TetraDigital' => [ // Controller
    ['tetraDigital', '/', 'GET'],
    ['login', '/login', ['GET','POST']],
    ['storyTelling', '/storytelling','GET'],
    ['contact', '/contact', ['POST', 'GET']],
    ['adminStoryTelling', '/adminstorytelling',['GET','POST']]


    ],

];
