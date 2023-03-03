<?php
$Bruno = [
    'name' => 'Bruno',
    'age' => 25,
    'job' => 'Developer'
];
$Sam = [
    'name' => 'Sam',
    'age' => 30,
    'job' => 'Designer'
];
$Brian = [
    'name' => 'Brian',
    'age' => 35,
    'job' => 'Manager'
];

$users = [
    $Bruno,
    $Sam,
    $Brian
];

echo $users[0]['name'] . '<BR>';