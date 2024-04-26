<?php
// Exercise 1
// Create an array with integers (up to 10) and print them out using foreach loop.

$onetoten = range(1,10);
foreach ($onetoten as $number) 
{
    echo $number.PHP_EOL;
}

// Exercise 2
// Create an array with integers (up to 10) and print them out using for loop.

$onetoten = range(1,10);
for ($i = 0; $i < count($onetoten); $i++) 
{
    echo $onetoten[$i].PHP_EOL;
}

// Exercise 3
// Given variable $x = 1 while $x is lower than 10, print out text "codelex". (Note: To avoid infinite looping, after each print increase the variable $x by 1)

$x = 1;
while($x < 10)
{
	echo "Codelex\n";
	$x++;
}

// Exercise 4
// Create a non associative array with integers and print out only integers that divides by 3 without any left.

$onetotwenty = range(1,20);
foreach ($onetotwenty as $number)
{
    if($number % 3 == 0){
        echo $number.PHP_EOL;
    }
}

// Exercise 5
// Create an associative array with objects of multiple persons.
// Each person should have a name, surname, age and birthday. Using loop (by your choice) print out every persons personal data.
$people = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50,
            "birthday" => 1974
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41,
            "birthday" => 1983
        ]
    ]
];

foreach ($people as $table)
{
    foreach ($table as $data)
    {
        echo "{$data["name"]} {$data["surname"]} {$data["age"]} {$data["birthday"]}".PHP_EOL;
    }
}
