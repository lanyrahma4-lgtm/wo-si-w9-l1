<?php
class Database 
{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "wsi10";

    public $conn;
    public function __construct() {
        try {
        $this->conn = new mysqli(
            $this->host, $this->user, $this->pass, $this->db
        );
    } catch (Exception $e){
        die ($e->getMessage());
    }
    
}
public function getConnection (){
    return $this->conn;
}
}