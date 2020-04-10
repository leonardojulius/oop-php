<?php 

/*
The purpose of this is to controll or design the programs

*/


class Cars {

    public $wheel_count= 4; // property can be use whole program
    private $door_count = 4; // property only available on this class
    protected $set_count = 2; // propery can be used in inheritance


    function car_detail() {

        echo $this->wheel_count;
        echo $this->door_count;
        echo $this->set_count;
       
    }

}

$bmw = new Cars();

//echo $bmw->wheel_count;
//echo $bmw->door_count; // cannot access private files
//echo $bmw->set_count; // cannot access protected files  
$bmw->car_detail(); //Display
?>