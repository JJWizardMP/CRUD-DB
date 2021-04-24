<?php
class Connection{
    public static function connetion($user, $password){
        try {
            $mbd = new PDO('mysql:host=localhost;dbname=Employees', $user, $password);
        } catch (PDOException $e) {
            echo "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $mbd;
    }
}
?>