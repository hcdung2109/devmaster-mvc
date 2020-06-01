<?php
include_once 'model/User.php';

class UserController
{
    public function index()
    {
        $model = new User();
        $data = $model->listData(); // call method to Parent Class

        require_once 'view/user/index.php';
    }

    public function create()
    {
        // kiem tra button da duoc nhan hay chua
        if (isset($_POST['btnCreate'])) {
            $name = $_POST['name'];
            $birthday = $_POST['birthday'];
            $address = $_POST['address'];

            $model = new User(); // khoi tao doi tuong user
            $model->insertData($name, $birthday, $address); // call method of Class Parent
        }

        require_once 'view/user/create.php';
    }

    public function edit()
    {
        require_once 'view/user/edit.php';
    }

    public function update()
    {
        echo 'update';
    }

    public function show()
    {
        echo 'show';
    }
}

$action = 'index';

if (isset($_GET['action']) && $_GET['action'] != '') {
    $action = $_GET['action'];
}


$user = new UserController();
$user->$action(); // call method
