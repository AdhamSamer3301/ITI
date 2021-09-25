<?php


class DB {
    private $hostName = "corona";
    private $userName = "root";
    private $pw="";
    public $dbName="corona";
    private $dbType="mysql";
    private $connection=null;

    function __construct()
    {
        $this->connection = new mysqli(
            $this->hostName,
            $this->userName,
            $this->pw,
            $this->dbName);
    }
    
    function getConnection()
    {
        return $this->connection;
    }

    
}
    $con = new DB();
    $con->getConnection(); 

    if ($con) {
        echo "Connected";
    } else {
        echo "Not Connected";
    }
    
   
?>