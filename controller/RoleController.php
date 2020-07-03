<?php
include_once 'model/Role.php';

class RoleController
{
    private $table = 'roles';

    // list
    public function index()
    {
        $modelRole = new Role(); // khoi tao lop && goi den ket noi CSDL
        $data = $modelRole->getAll($this->table);

        include_once 'view/role/index.php';
    }

    public function create()
    {
        if (!empty($_POST['ten'])) {
            $name = $_POST['ten'];

            $data = [
                'name' => $name
            ];

            $modelRole = new Role();
            $modelRole->insert($this->table, $data); // ham them du lieu


        }

        include_once 'view/role/create.php';
    }
}

$role = new RoleController(); // khởi tạo lớp

// chuyển hướng action
if (!empty($_GET['action'])) {
    $action = $_GET['action']; // 'create'
    $role->$action(); // = $role->create()
} else {
    $role->index(); // = $role->index()
}