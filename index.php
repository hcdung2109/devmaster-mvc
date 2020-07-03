<?php

include_once 'model/Model.php';

$controller = '';

if (!empty($_GET['controller'])) {
    $controller = $_GET['controller'];
}

if ($controller == 'user') {
    require_once 'controller/UserController.php';

} elseif ($controller == 'role') {
    require_once 'controller/RoleController.php';

} elseif ($controller == 'product') {
    require_once 'controller/ProductController.php';

} else {

}
