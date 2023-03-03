<?php
var_dump(4==4); // true
var_dump(4==5); // false
var_dump('4'==4); // true
var_dump('4'===4); // false
var_dump(4!=5); // true
var_dump(4!=4); // false
var_dump(4<>5); // true
var_dump(4<>4); // false
var_dump(4!==4); // false
var_dump(4!==5); // true
var_dump(4<5); // true
var_dump(4>5); // false
var_dump(4<=5); // true
var_dump(4>=5); // false
var_dump(4<=>5); // -1
var_dump(4<=>4); // 0
var_dump(5<=>4); // 1

$age = 21;
if ($age >= 21) {
    echo 'You can drink';
} else {
    echo 'You cannot drink';
}
