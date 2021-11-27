<?php
namespace PHPMVC\core;
use PDO;

class DbConnect
{
    private $username="maro";
    private $password="123abc";
    private $dbname="books";
    private $host="localhost";
    private $dbtype="mysql";
    private $connection=null;

    function __construct()
    {
        $this->connection= new PDO
        (
            $this->dbtype. ":host=" .$this->host. ";dbname=" .$this->dbname,
            $this->username,$this->password

        );
    }

    function getconnection()
    {
        return $this->connection;
    }
}

$conn=new DbConnect();
$conn=$conn->getconnection();

?>