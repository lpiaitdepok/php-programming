//array() function is used to create an array:
$cars = array();

//stores multiple values in array
$cars = array("Volvo", "BMW", "Toyota");

//The count() function is used to return the length (the number of elements) of an array
echo count($cars);

//Insert "blue" and "yellow" to the end of an array:
$a=array("red","green");
array_push($a,"blue","yellow");
print_r($a);
