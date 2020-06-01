<?php
include_once 'model/Ncc.php';

class NccController
{
    public function index()
    {
        $ncc = new Ncc();
        $data = $ncc->all(); // lay toan bo du lieu

        require_once 'view/ncc/index.php';
    }

    public function create()
    {
        if (isset($_POST['btnCreate'])) {
            $params = [
                'MaNCC' => $_POST['MaNCC'],
                'TenNCC' => $_POST['TenNCC'],
                'Dienthoai' => $_POST['Dienthoai'],
                'Diachi' => $_POST['Diachi'],
            ];

            $ncc =  new Ncc();  //lop duoc khoi tai => __contructor
            $ncc->insert($params);

        }

        require_once 'view/ncc/create.php';
    }

    public function edit()
    {
        if (!empty($_GET['id'])) {
            $_id = $_GET['id'];

            $conditions = [
                'MaNCC' => $_id
            ];

            $ncc = new Ncc();
            $data = $ncc->find($conditions);

            if (isset($_POST['btnUpdate'])) {
                $params = [
                    'MaNCC' => $_POST['MaNCC'],
                    'TenNCC' => $_POST['TenNCC'],
                    'Dienthoai' => $_POST['Dienthoai'],
                    'Diachi' => $_POST['Diachi'],
                ];

                $ncc =  new Ncc();  //lop duoc khoi tai => __contructor
                $ncc->update($conditions, $params);

                $data = $ncc->find($conditions);
            }
        }

        require_once 'view/ncc/edit.php';
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

$ncc = new NccController();
$ncc->$action(); // call method
