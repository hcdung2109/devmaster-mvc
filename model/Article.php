<?php
include_once 'Model.php';

Class Article extends Model
{
    // Dinh nghĩa hàm khởi tạo
    public function __construct()
    {
        // Gọi đến hàm khởi tạo của lớp cha
        parent::__construct(); // parent ==  Class Cha
    }
}
