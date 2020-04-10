<!--Class method.php -->
<!-- 
/***a method is just a function that is declared inside a class and

we call functions as method when it is inside the class
and we call function when its outside the class***/-->

<?php

class Cars {

    function gretting(){


    }/// Example of method

    function gretting2(){


    }/// Example of method
}

$the_methods = get_class_methods('Cars'); // Example of function

foreach($the_methods as $method) {
    echo $method . "<br>";
}

?>