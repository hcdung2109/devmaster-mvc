<?php
include_once 'model/Model.php';

Class User extends Model
{
    public $id;
    public $name;
    public $birthday;
    public $address;

    public function __construct()
    {
        parent::__construct(); // parent ==  Class Cha,
    }
}
