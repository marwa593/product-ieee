<?php
namespace PHPMVC\models;
use PHPMVC\core\DbConnect;

class BookModel 
{
    function add($table,$data)
    {
         $conn=new DbConnect();
         $connection=$conn->getconnection();

         $sql = "INSERT INTO $table (name, price, category ,pages_num ,writer) VALUES (?,?,?,?,?)";
         $stmt= $connection->prepare($sql);
         $stmt->execute($data);
         
         return $connection->LastInsertId();

    }

    function select($col,$table,$con)
    {
        $conn=new DbConnect();
        $connection=$conn->getconnection();

        $data=$connection->query("select $col from $table where $con");
        return $data;

    }

    function delete($table,$id)
    {
        $conn=new DbConnect();
        $connection=$conn->getconnection();

        $sql = "DELETE FROM $table WHERE id=?";
        $stmt= $connection->prepare($sql);
        $stmt->execute([$id]);

    }

    function edit($col,$table,$id)
    {
        $conn=new DbConnect();
        $connection=$conn->getconnection();

        $stmt = $connection->prepare("SELECT $col FROM $table WHERE id=?");
        $stmt->execute([$id]); 
        return $stmt;

    }

    function update($table,$edited_data)
    {
        $conn=new DbConnect();
        $connection=$conn->getconnection();

        $sql = "UPDATE $table SET name, price, category ,pages_num ,writer VALUES (?,?,?,?,?) WHERE id=?";
        $stmt= $connection->prepare($sql);
        $stmt->execute($edited_data);
        return $stmt;


    }























    // function delete($table)
    // {
    //     $conn=new connect();
    //     $connection=$conn->getconnection();

    //     $sql = "DELETE FROM $table WHERE id=?";
    //     $stmt= $connection->prepare($sql);
    //     $stmt->execute([$id]);





    // }







}
$model=new Bookmodel ();



?>