<?php
require('connection.php');
class EmployeesModel{
    private $db;
    private $employees;
 
    public function __construct(){
        $this->db=Connection::connetion("root", "");
        $this->employees=array();
    }

    public function get_all_employees(){
        // use the connection here
        $sth = $this->db->query('SELECT * FROM employees');
        // fetch all rows into array, by default PDO::FETCH_BOTH is used
        $rows = $sth->fetchAll();
        return $rows;
    }

    public function add_row($data){
        try {
            $sql = 'INSERT INTO employees(Name, Email, Address, Phone) VALUES (:name, :email, :address, :phone)';
            $stmt= $this->db->prepare($sql);
            $stmt->execute($data);
        } catch (PDOException $e) {
            echo "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}
?>