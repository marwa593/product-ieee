<?php
namespace PHPMVC\models;
use PDO;
class connect
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
$conn=new connect();
$conn=$conn->getconnection();



?>