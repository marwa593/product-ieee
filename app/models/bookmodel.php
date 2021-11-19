<?php

namespace PHPMVC\models;
use PHPMVC\models\connect;

class Bookmodel 
{
    function add($table,$data )
    {
         $conn=new connect();

         $connection=$conn->getconnection();

         $sql = "INSERT INTO $table (name, price, category ,pages_num ,writer) VALUES (?,?,?,?,?)";
         $stmt= $connection->prepare($sql);
         $stmt->execute($data);
         
         return $connection->LastInsertId();

    }


    function select($col,$table,$con)
    {

        $conn=new connect();
        $connection=$conn->getconnection();

        $data=$connection->query("select $col from $table where $con");
        return $data;

    }


    function delete($table,$id)
    {

        $conn=new connect();
        $connection=$conn->getconnection();

        $sql = "DELETE FROM $table WHERE id=?";
        $stmt= $connection->prepare($sql);
        $stmt->execute([$id]);

    }

    function edit()
    {

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