<?php
require "config.php";
class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PWD;
    private $dbname = DB_NAME;
    private $category = DB_CATEGORY;
    private $conection;
    private $stmt;
    function __construct()
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $this->conection = new PDO($dsn, $this->user, $this->pass);
    }
    public function query($query)
    {
        $this->stmt = $this->conection->prepare($query);
    }
    public function getCategory()
    {
        $this->category;
    }
    public function execute()
    {
        return $this->stmt->execute();
    }
    public function resultset()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }
    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }
}