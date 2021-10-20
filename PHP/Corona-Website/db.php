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

    function getData()
    {
        return $this->connection->query("SELECT * FROM info;");
    }

    function inserData($table,$col,$data)
    {
        $data = $this->connection->query
        ("INSERT INTO $table($col) VALUES ($data)");

        return $data;
    }

    
}
    $con = new DB();
    $col = "fname,lname,email,pw,country,vaccType,phone";
    $col = "adham,samer,adhasmamer3301@gmail.com,123,Alex,SinoFac,010000417360";
    $con->inserData("info",$col,$values);
     var_dump($con->getData());
    /*$con->getConnection(); 

    if ($con) {
        echo "Connected";
    } else {
        echo "Not Connected";
    }*/
    
   
?>