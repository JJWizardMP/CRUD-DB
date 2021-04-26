<?php
    require('connection.php');
    class EmployeesModel{
        private $db;
    
        public function __construct(){
            $this->db=Connection::connetion("root", "");
        }

        public function close(){
            $this->db = null;
        }

        public function get_all_employees(){
            // use the connection here
            $sth = $this->db->query('SELECT * FROM employees');
            // fetch all rows into array, by default PDO::FETCH_BOTH is used
            $rows = $sth->fetchAll();
            return $rows;
        }

        public function search_byid($id){
            try {
                $stmt = $this->db->prepare('SELECT * FROM employees WHERE id = :id');
                $stmt->bindParam(':id', $id);
                $stmt->execute();
                $row = $stmt->fetch();
            } catch (PDOException $e) {
                die();
            }
            return $row;
        }

        public function add_row($data){
            try {
                $sql = 'INSERT INTO employees(Name, Email, Address, Phone) 
                            VALUES (:name, :email, :address, :phone)';
                $stmt= $this->db->prepare($sql);
                $stmt->execute($data);
            } catch (PDOException $e) {
                die();
            }
        }

        public function update_row($data){
            try {
                $sql = "UPDATE employees SET Name=:name, Email=:email, Address=:address, Phone=:phone 
                        WHERE ID=:id";
                $stmt= $this->db->prepare($sql);
                $stmt->execute($data);
            } catch (PDOException $e) {
                die();
            }
        }

        public function delete_row($id){
            try {
                $stmt = $this->db->prepare('DELETE FROM employees WHERE ID=:id');
                $stmt->bindParam(':id', $id);
                $stmt->execute();
            } catch (PDOException $e) {
                die();
            }   
        }

        public function filter_name($searchValue){
            try {
                $query = "SELECT * FROM employees WHERE Name LIKE :search";
                $result = $this->db->prepare($query);
                $result->bindValue(':search', "%$searchValue%", PDO::PARAM_STR);
                $result->execute();
                $rows = $result->fetchAll();
            } catch (PDOException $e) {
                die();
            }
            return $rows;
        }
    }
?>