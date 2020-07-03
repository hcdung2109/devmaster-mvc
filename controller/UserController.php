<?php
include_once 'model/User.php';
// include_once 'GeneralController.php';

class UserController extends GeneralController
{
    private $table = 'users';
    // Hàm khởi tạo
    // + Khoi tao gia tri măc đinh
    // + Gọi đến những method , run đầu tiên
    public function __construct()
    {
        //echo '__construct';
        //$this->hello();
    }

    // Danh sach user
    public function getListUsers()
    {
        $modelUser = new User();
        $data = $modelUser->getAll($this->table);

        include_once 'view/user/list-users.php';

    }

    public function create()
    {

    }


    //    public function index()
//    {
//        // echo 'hello';
//        // Gọi đến hàm method - protected
//        // $edit = $this->edit();
//        // không gọi được hàm method private tư cha
//        // $delete  = $this->delete();
//        // Gọi đến thuộc tính - lớp cha - protected
//        $age = $this->age;
//
//        echo $age;
//    }


//    public function index2()
//    {
//        $model = new User();
//        $data = $model->listData(); // call method to Parent Class
//
//        require_once 'view/user/index.php';
//    }
//
//    public function create()
//    {
//        // kiem tra button da duoc nhan hay chua
//        if (isset($_POST['btnCreate'])) {
//            $name = $_POST['name'];
//            $birthday = $_POST['birthday'];
//            $address = $_POST['address'];
//
//            $model = new User(); // khoi tao doi tuong user
//            $model->insertData($name, $birthday, $address); // call method of Class Parent
//        }
//
//        require_once 'view/user/create.php';
//    }
//
//    public function edit()
//    {
//        require_once 'view/user/edit.php';
//    }
//
//    public function update()
//    {
//        echo 'update';
//    }
//
//    public function show()
//    {
//        echo 'show';
//    }
}

//$action = 'index';
//
//if (isset($_GET['action']) && $_GET['action'] != '') {
//    $action = $_GET['action'];
//}
//
//$user = new UserController();
//$user->$action(); // call method
