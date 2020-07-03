<?php

Class Model
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "webshop";

    private $conn = null; // connection to db
    private $result = null; // kêt quả

    protected $table = null; // lưu tên bảng hiện tại

    // Hàm khơi tạo - luôn được gọi khi lớp được khởi tạo
    public function __construct()
    { // Kết nối CSDL
        $this->connect();
    }

    /**
     * ket noi toi CSDL
     * @return false|mysqli|null
     */
    public function connect()
    {
        $this->conn = mysqli_connect($this->servername,
                                    $this->username,
                                    $this->password,
                                    $this->database);
        if (!$this->conn) {
            die('Ket noi that bai');
        } else {
            // kết nối thành công
            $this->conn->set_charset("utf8");
            //echo 'OK';
        }
        return $this->conn;
    }

    // lấy toàn dữ liệu của 1 bảng //$table = $this->table;
    public function getAll($table , $condition = 1)
    {
        $sql = "SELECT * FROM $table WHERE $condition";
        $result  = $this->conn->query($sql);

        $data = [];
        while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
            $data[] = $row;
        }

        return $data;
    }

    public function insert($table, $data)
    {
        if (is_array($data) && $data) {
            $columns = [];
            $values = [];

            foreach ($data as $key => $val) {
                $columns[] = $key;
                if (is_string($val)) {
                    $values[] = "'$val'";
                } else {
                    $values[] = $val;
                }

            }

            $strColumn = implode(',', $columns);
            $strValues = implode(',', $values);

            // $sql = 'INSERT INTO '.$table.' (name) VALUES ("'.$data.'")';
            $sql = "INSERT INTO $table ($strColumn) VALUES ($strValues)";

            $result = $this->conn->query($sql);

            if (!$result) { // kiêm tra nếu thực hiện nếu thất bại
                print_r("Lỗi : " .$this->conn->error);
                exit();
            }
        }
    }

    public function delete($table, $id)
    {
        $sql = "DELETE FROM $table WHERE id = $id";

        $this->conn->query($sql);
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




    public function add($params)
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
