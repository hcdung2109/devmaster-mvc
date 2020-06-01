<?php

require_once 'helpers/general.php';

$controller = '';
if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
}

switch ($controller) {
    case 'user':
        require_once 'controller/UserController.php';
        break;
    case 'ncc':
        require_once 'controller/NccController.php';
        break;
    case 'bo-phan':
        require_once 'controller/BoPhanController.php';
        break;
    default:
        echo 'trang chu';
}