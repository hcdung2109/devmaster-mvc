<?php
include_once 'model/Model.php';

Class BoPhan extends Model
{
    // Thuoc Tinh
    public $id;
    public $name;

    // Ham khoi tao
    public function __construct()
    {
        parent::__construct(); // parent ==  Class Cha,

        $this->table = 'bophan'; // set table name

    }
}
