<?php
// include_once 'Model.php';
/**
 * Created by PhpStorm.
 * User: HocVien
 * Date: 6/19/2020
 * Time: 6:30 PM
 */
class Role extends Model
{
    public function __construct()
    {
        // Gọi đến hàm khởi tạo của lớp cha
        parent::__construct(); // parent ==  Class Cha
    }
}