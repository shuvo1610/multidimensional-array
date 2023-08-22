<?php

$students = [

    0 => [
        'id' => 1,
        'name' => 'abc'
    ],
    1 => [
        'id' => 2,
        'name' => 'xyz'
    ],
    2 => [
        'id' => 3,
        'name' => 'pqr'
    ],
    3 => [
        'id' => 4,
        'name' => 'mno'
    ],
    4 => null,
    5 => [
        'id' => 5,
        'name' => 'jkl'
    ],

];

foreach ($students as $key=>$val) {
    if ($val === null)
        unset($students[$key]);
}

print_r($students);
?>
