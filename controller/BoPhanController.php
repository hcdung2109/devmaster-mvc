<?php
include_once 'model/BoPhan.php';

class BoPhanController
{
    public function index()
    {
        $bo_phan = new BoPhan();
        $data = $bo_phan->all(); // lay toan bo du lieu , ham all- Model

        require_once 'view/bophan/index.php';
    }

    public function create()
    {
        if (isset($_POST['btnCreate'])) { // kiem button Tạo có được submit
            $params = [
                'name' => $_POST['name']
            ];

            $bo_phan =  new BoPhan();  //lop duoc khoi tai => __contructor
            $bo_phan->insert($params);

        }

        require_once 'view/bophan/create.php';
    }

    public function edit()
    {
        if (!empty($_GET['id'])) {
            $_id = $_GET['id'];

            // tạo mảng chưa dieu kiện tìm kiếm trong câu select ... where ...$conditions
            $conditions = [
                'id' => $_id
            ];

            $bo_phan = new BoPhan(); // khoi tao model BoPhan
            $data = $bo_phan->find($conditions); // ham find được gọi từ lớp cha - Model

            // kiem tra button sửa click
            if (isset($_POST['btnUpdate'])) {
                // tham so nhan tu form
                $params = [
                    'name' => $_POST['name']
                ];

                $bo_phan =  new BoPhan();  //lop duoc khoi tai => __contructor
                $bo_phan->update($conditions, $params);

                // Chuyển hướng url về trang danh sách
                redirect('http://mvc.local/index.php?controller=bo-phan');

                //$data = $bo_phan->find($conditions); // get lai data đã update
            }
        }

        require_once 'view/bophan/edit.php';
    }

    public function update()
    {
        echo 'update';
    }

    public function show()
    {
        echo 'show';
    }

    public function delete()
    {
        if (!empty($_GET['id'])) {
            $id = $_GET['id'];

            $bo_phan = new BoPhan();
            $bo_phan->remove($id);
        }

        // Chuyển hướng url về trang danh sách
        redirect('http://mvc.local/index.php?controller=bo-phan');
    }
}

$action = 'index';
if (isset($_GET['action']) && $_GET['action'] != '') {
    $action = $_GET['action'];
}

$ncc = new BoPhanController();
$ncc->$action(); // call method
