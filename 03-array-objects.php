<?php
// Exercise 1
// Create a non-associative array with 3 integer values and display the total sum of them.

$arraysum = [10, 20, 30];
echo "The total sum of the array is" . array_sum( $arraysum ).PHP_EOL;

// Exercise 2
// Using dump method, dump out all 3 values.

$person = [
    "name" => "John",
    "surname" => "Doe",
    "age" => 50
];
    var_dump($person).PHP_EOL;

// Exercise 3
// Using dump method, dump out all 3 values.

$person = new stdClass();
$person->name = "John";
$person->surname = "Doe";
$person->age = 50;

var_dump($person->name , $person->surname , $person->age).PHP_EOL;

// Exercise 4
// Program should display concatenated value of - Jane Doe 41

$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];

echo $items[0][1]["name"] . " " . $items[0][1]["surname"] . " " . $items[0][1]["age"].PHP_EOL;

// Exercise 5
// Program should display concatenated value of - John & Jane Doe`s

$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];

echo "- {$items[0][0]['name']} & {$items[0][1]['name']} {$items[0][1]['surname']}'s".PHP_EOL;