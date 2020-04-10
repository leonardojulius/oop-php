<?php 

/*
The purpose of this is to controll or design the programs
*/


class Cars {

    public $wheel_count= 4; // property can be use whole program
   
    static $door_count= 4; // property can be use whole program

    function __construct() {

    echo $this->wheel_count;
    echo self::$door_count++;
       
    }

}

$bmw = new Cars();
$merceds = new Cars();
?>