<?php
function binarySearch($numbers, $needle) {
    $first = 0;
    $last = count($numbers) - 1;
    while ($first <= $last) {
        $mid = (int)(($first + $last) / 2);

        if ($needle < $numbers[$mid]) {
            $last = $mid - 1;
        } elseif ($needle > $numbers[$mid]) {
            $last = $mid + 1;
        } else {
            return true;
        }
    }
    return false;
}

$numbers = range(1,100,5);

$number = 82;
if (binarySearch($numbers, $number)) {
    echo "$number Found \n";
} else {
    echo "$number not Found \n";
}