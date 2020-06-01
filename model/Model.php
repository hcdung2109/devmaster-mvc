<?php

Class Model
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "quanlyvattu";

    private $conn = null; // connection to db
    private $result = null;

    protected $table = null; // dung the hien table dag duoc goi toi

    public function __construct()
    {
        $this->connect(); // ket noi toi CSDL
    }

    /**
     * Open Connection to db
     * @return false|mysqli|null
     */
    public function connect()
    {
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->database);

        if (!$this->conn) {
            die('Ket noi that bai');
        } else {
            $this->conn->set_charset("utf8");
        }

        return $this->conn;
    }

    /**
     * execute command mysql
     * @param $sql
     * @return null
     */
    public function execute($sql)
    {
        $this->result  = $this->conn->query($sql);

        return $this->result;
    }

    public function insert($params)
    {
        $table = $this->table;
        $fields = []; // chua toan bo thuộc field trong CSDL
        $values = []; //chua toan bo giá trị cho field ben tren

        foreach ($params as $key => $value) {
            $fields[] = $key;
            $values[] = "'".$value."'";
        }

        $_fields = implode(",", $fields); // chuyen mot mang thanh string nôi nhau boi dau ,
        $_values = implode(",", $values);

        $sql = "INSERT INTO $table ($_fields) VALUES ($_values)";

        return $this->execute($sql);
    }

    public function update($conditions, $params)
    {
        $table = $this->table;

        // get dieu kiện
        $arrConditions = [];
        foreach ($conditions as $key => $value) {
            $arrConditions[] = "$key = '$value' ";
        }
        $_conditions = implode(" AND ", $arrConditions);

        // set value

        $values = []; //chua toan bo giá trị cho field ben tren
        foreach ($params as $key => $value) {
            $values[] = "$key = '$value' ";
        }
        $_values = implode(", ", $values);

        $sql = "UPDATE $table SET $_values WHERE $_conditions";

        return $this->execute($sql);
    }

    public function updateData($id, $name , $brithday, $address)
    {
        $sql = "UPDATE users SET name = '$name', brithday = '$brithday', address = '$address' WHERE id = $id";

        return $this->execute($sql);
    }

    // lay toan bo danh sach cua một bảng
    public function all()
    {
        // goi toi ten table
        $table = $this->table;

        $sql = "SELECT * FROM $table";
        $query = $this->execute($sql); // run query

        $data = [];
        while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
            $data[] = $row;
        }

        return $data;
    }

    // Tìm kiếm trong CSDL
    public function find($conditions)
    {
        // goi toi ten table
        $table = $this->table;

        $values = []; // Khai bao mảng lưu trữ điều kiện
        foreach ($conditions as $key => $value) {
            $values[] = "$key = '$value' ";
        }

        $_fields = implode(" AND ", $values); // chuyển mảng thành string - chuỗi nối nhau bởi ký tự AND

        $sql = "SELECT * FROM $table WHERE $_fields";
        $query = $this->execute($sql); // thực hiện câu query

        $data = mysqli_fetch_assoc($query); // lấy dữ liệu

        return $data;
    }

    public function insertData($name , $birthday, $address)
    {
        $sql = "INSERT INTO users(name, birthday, address) VALUES ('$name', '$birthday', '$address')";

        return $this->execute($sql);
    }

    public function delete($user_id)
    {
        $sql = "DELETE FROM users WHERE id = $user_id";

        return $this->execute($sql);
    }

    public function listData()
    {
        $sql = "SELECT * FROM users";
        $query = $this->execute($sql);

        $data = [];
        while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
            $data[] = $row;
        }

        return $data;
    }

    public function remove($id)
    {
        $table = $this->table;
        $sql = "DELETE FROM $table WHERE id = $id";

        return $this->execute($sql);
    }



}
