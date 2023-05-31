<?php
// a. Indexed Array
$array1 = array("Item 1", "Item 2", "Item 3");

// b. Associative Array
$array2 = array("key1" => "Value 1", "key2" => "Value 2", "key3" => "Value 3");

// c. Multi-dimensional Array
$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

// d. User-defined function with no parameter
function function1() {
    echo "Function 1 executed.";
}

// e. User-defined function with 3 parameters
function function2($param1, $param2, $param3) {
    echo "Function 2 executed with parameters: $param1, $param2, $param3";
}

// f. User-defined function with return value
function function3($value1, $value2) {
    $result = $value1 * $value2;
    return $result;
}

// g. User-defined function with no return value
function function4() {
    echo "Function 4 executed.";
}

// Testing the functions
function1(); // Output: Function 1 executed.
echo "<br>";

function2("Value 1", "Value 2", "Value 3"); // Output: Function 2 executed with parameters: Value 1, Value 2, Value 3
echo "<br>";

$result = function3(2, 3);
echo "The result is: " . $result; // Output: The result is: 6
echo "<br>";

function4(); // Output: Function 4 executed.
?>
