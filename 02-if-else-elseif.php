<?php
// Exercise 1
// Given variables (int) 10, string "10" determine if they both are the same.

$a = 10;
$b = "10";
if ($a === $b)
{
    echo "Types are the same.".PHP_EOL;
} else {
    echo "Types are not the same.".PHP_EOL;
}

// Exercise 2
// Given variable (int) 50, determine if its in the range of 1 and 100.

$c = 50;
if ($c >= 1 && $c <= 100)
{
    echo $c ." ". 'is in between 1 and 100'.PHP_EOL;
} else {
    echo $c ." ". 'is not in between 1 and 100'.PHP_EOL;
}

// Exercise 3
// Given variables (string) "hello" create a condition that if the given value is "hello" then output "world".

$hellos = "hello";

if ($hellos === "hello")
{
    echo "world".PHP_EOL;
} else {
    echo $hellos.PHP_EOL;
}

// Exercise 4
// By your choice, create condition with 3 checks.
// For example, if value is greater than X, less than Y and is an even number.
$d = 61;
$x = 1.5;
$y = 120;
if ($d >= $x && $d <= $y && $d % 2 == 0)
{
    echo "The number $d is greater then the number $x, less then number $y and is even".PHP_EOL;
}else{
    echo "The number $d is not greater then the number $x, not less then number $y or is not even".PHP_EOL;
}

// Exercise 5
// Given variable (int) 50 create a condition that prints out "correct" if the variable is inside the range.
// Range should be stored within the 2 separated variables $y and $z.

$c = 50;
$z = 3;
$y = 120;
if ($c >= $z && $c <= $y)
{
    echo "correct".PHP_EOL;
} else {
    echo "incorrect".PHP_EOL;
}

// Exercise 6
// Create a variable $plateNumber that stores your car plate number. Create a switch statement that prints out that its your car in case of your number.

$plateNumber = 234046;

switch ($plateNumber)
{
    case 234045;
        echo "It's not your car.".PHP_EOL;
        break;
    case 234046;
        echo "It's your car.".PHP_EOL;
        break;
    case 234047;
        echo "It's not your car.".PHP_EOL;
        break;
    case 234048;
        echo "It's not your car.".PHP_EOL;
        break;
}

// Exercise 7
// Create a variable $number with integer by your choice. Create a switch statement that prints out text "low" if the value is under 50, "medium" if the case is higher than 50 but lower than 100, "high" if the value is >100.

$number = 73;   

switch($number)
{
    case $number <= 20;
        echo "low".PHP_EOL;
        break;
    case $number >= 50 && $number <= 100;
        echo "medium".PHP_EOL;
        break;
    case $number >= 100;
        echo "high".PHP_EOL;
        break;
}