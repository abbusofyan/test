<?php

$list_of_integer = array(9, 23, 4, 17, 8, 2, 3);

function main($list_of_integer) {
    // please do the logic here
    sort($list_of_integer);
    $new_array = [];
    $length = count($list_of_integer);
    for($x = 0; $x < $length; $x++) {
        array_push($new_array,$list_of_integer[$x]);
    }
    return $new_array;
}

echo json_encode(main($list_of_integer));
