<?php
$str = "122 32 74 41 1";
print $str;
echo "<br>";
$str = explode(" ", $str);
$element = count($str) - 1;
$result = [];
while ($element >= 0) {
    $result[$element] = $str[$element];
    $element--;
}
echo $str = implode('-', $result);
