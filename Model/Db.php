<?php
namespace Model\Admin;

class Db
{
    private static $instance = NULL;
    private $data=4;
    // public static function DbConnection()
    // {

    // }
    public function __construct()
    {
        echo "Connect";
    }
    public function __get($prop)
    {
        return $this->data;
    }
    public function __set($property,$value)
    {
        $this->data=$value;
    }
    public static function Singleton()
    {
        if(isset(self::$instance)){
            echo "Already connected";
            
        }
        else{
            self::$instance = new Db();
        }
        return self::$instance;
    }
}

$obj=Db::Singleton();
print_r( $obj);
// echo $obj->prop;
$obj->property=10;
echo $obj->property;
?>