<?php
function countNumber($numbers,$value) {
    $count = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        if ($numbers[$i] == $value) {
            $count++;
        }
    }
    return $count;
}

$numbers = [4, 2, 5, 7, 2, 0, 2, 8];

foreach ($numbers as $value) {
    echo $value . " ";
}
$countNumber = countNumber($numbers, 2);
echo "</br>";
echo "Number of times the number is " . $countNumber;