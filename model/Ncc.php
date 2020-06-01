<?php
include_once 'model/Model.php';

Class Ncc extends Model
{
    public $MaNCC;
    public $TenNCC;
    public $Dienthoai;
    public $Diachi;

    public function __construct()
    {
        parent::__construct(); // parent ==  Class Cha,

        $this->table = 'nhacc'; // set table name

    }
}
