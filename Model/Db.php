<?php
namespace Model;

class Db
{
    private static $conn;

    function getConnection()
    {
        if(Db::$conn == null){
            Db::$conn = new \mysqli("localhost", "root", "", "gym_admin");
            if (Db::$conn->connect_error) {
                die("connection failed" . Db::$conn->connect_error);
            }
        }
        return Db::$conn;
    }
}

?>