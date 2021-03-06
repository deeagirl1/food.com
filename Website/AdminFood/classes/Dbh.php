<?php
class Dbh {
    private $username = 'root';
    private $password = '';
    private $host = 'localhost';
    private $dbName = 'food';
    protected $conn;

    public function __construct() {
        try{
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e){
            echo $e->getMessage();
        }
    }
}
?>

