<?php 

/*
we can attach the static functionality to a property or a function.
method we can mke it static and we can also make a property static

the difference between a property a regular property and a static
property is that the regular property is attached to the instance meaning 
that you always have to use an instance to get the property

for static modifiers
you don't need an instance you only refer to a class name
its attached to a class instead of instance


*/


class Cars {

    static $wheel_count= 4; // property can be use whole program
    static $door_count = 4; // property only available on this class
  

    static function car_detail() {

        echo Cars::$wheel_count;
        echo Cars::$door_count;

    }

}

echo Cars::$door_count; // example of static modifiers output: 4
Cars::car_detail();
?>