<?php
include_once 'Model.php';

Class User extends Model
{
    public $id;
    public $name;
    public $birthday;
    public $address;

    // Dinh nghĩa hàm khởi tạo
    public function __construct()
    {
        // Gọi đến hàm khởi tạo của lớp cha
        parent::__construct(); // parent ==  Class Cha
    }
}
