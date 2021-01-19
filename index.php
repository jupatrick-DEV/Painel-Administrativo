<?php

$pg = isset($_GET['pg']);

if ($pg) {

//existe 

    switch ($_GET['pg']) {
        case 'login':
            include_once 'painel/paginas/acesso/login.php';
            break;

        case 'dashboard': // pagina inicial do painel administrativo
            include_once 'painel/paginas/dashboard.php';
            break;
        
        default:
            include_once 'painel/paginas/dashboard.php';
            break;
    }
} else {
//nao existe
    include_once 'painel/paginas/dashboard.php';
}

