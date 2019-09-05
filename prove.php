<?php

// $greetings = 'Hello World';

$array = ['Pietro', 'Kamal', 'Sara'];

$associativearray = [
    'age' => 21,
    'height' => 190,
    'nationality' => 'Ita'
];

$associativearray['name'] = 'Pietro';

$array[] = 'Georgia';

unset($array[1]);
unset($associativearray['nationality']);

$array[1] = 'BOO';


var_dump($array);
var_dump($associativearray);

$task = ['title' => 'imparare php', 'due' => 'today', 
'assigned_to' => 'Jeffrey', 'completed' => false];

if ($task['title'] == 'imparare php') {
    echo 'bene';
}

function testage($age) {
    return $age >= 21;
}

if (testage(21)) {
    echo "Allowed";
}
else echo "Not Allowed";

// require 'index.php';