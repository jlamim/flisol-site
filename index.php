<?php
/**
 * index.php
 *
 * @author GCCSD <http://gccsd.com.br>
 */

require __DIR__ . '/bootstrap.php';

$page = $route;

switch ($route) {
    case '':
        $page = 'principal';
        $title = 'Flisol Vila Velha 2015';
        break;
    case 'principal':
        $title = 'Flisol Vila Velha 2015';
        break;
    case 'flisol':
        $title = 'Sobre o Flisol';
        break;
    case 'programacao':
        $title = 'Programação | Flisol Vila Velha 2015';
        break;
    case 'local':
        $title = 'Local | Flisol Vila Velha 2015';
        break;
    case 'organizadores':
        $title = 'Organizadores & Apoiadores | Flisol Vila Velha 2015';
        break;
    case 'fotos':
        $titulo = 'Fotos | Flisol Vila Velha 2015';
        break;
    default:
        $page = '404';
        $title = 'Ops! Página não encontrada!';
        break;
}

include('template.php');
