<?php

include_once 'model/Product.php';

class ProductController
{
    private $table = 'products';

    public function index()
    {
        $modelProduct = new Product();

        $data = $modelProduct->getAll($this->table);

        include_once 'view/product/index.php';
    }

    public function create()
    {
        $errorMsg = ''; // Lưu message lỗi nếu có;

        if (isset($_POST['btnCreate'])) {
            $name = $_POST['name'];
            $image = $_POST['image'];
            $stock = $_POST['stock'];
            // $a = (bieu_thuc_dieu_kien) ? gia_tri_true : gia_tri_false
            // $active = isset($_POST['is_active']) ? $_POST['is_active'] : 0;
            if (isset($_POST['is_active'])) {
                $active = $_POST['is_active'];
            } else {
                $active = 0;
            }

            if (!isset($_POST['name']) || empty($_POST['name'])) {
                $errorMsg = 'Tên không được để trống';

            } else {
                // validate thành công

                $data = [
                    'name' => $name,
                    'stock' => $stock,
                    'is_active' => $active
                ];

                $modelProduct = new Product();
                $modelProduct->insert($this->table, $data); // ham them du lieu

                header('Location: http://mvc.local:8888/index.php?controller=product');
                exit;
            }
        }

        include_once 'view/product/create.php';
    }

    public function delete()
    {
        $id = $_POST['id'];

        $modelProduct = new Product();
        $modelProduct->delete($this->table, $id); // gọi tới hàm xóa

        $data = [
            'status' => 1, // success
            'message' => 'Xóa thành công'
        ];

        echo json_encode($data);
    }
}

$product = new ProductController();

// chuyển hướng action
if (!empty($_GET['action'])) {
    $action = $_GET['action']; // 'create'
    $product->$action(); // = $role->create()
} else {
    // mac dinh
    $product->index(); // = $role->index()
}