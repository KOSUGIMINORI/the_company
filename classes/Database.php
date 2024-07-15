<?php



class Database{
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'the_company';  //phpAdminに作った名前
    
    public $conn;

    public function __construct(){
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        //mysqli ２つの言語の翻訳機のようなもの

        //errorの時に理由を教えてくれる
        if ($this->conn->connect_error){
            die("Connection failed: ". $this->conn->connect_error);
        }
    }
}