<?php

$empty=["hello"];

if (empty($empty)) {
    echo 'It is empty';
}
else {
    echo 'array is not empty' . "<BR>" ;
}

$hour = 14;

if ($hour < 12) {
    echo 'Good morning';
}
elseif ($hour < 18) {
    echo 'Good afternoon';
}
else {
    echo 'Good evening';
}

