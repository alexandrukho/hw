<?php
$str = "122 32 74 41 1";
print $str;
echo "<br>";
$str = explode(" ", $str);
$element = count($str) - 1;
while ($element >= 0) {
    $result[$element] = $str[$element];
    $element--;
}
echo $str = implode('-', $result);
/*$str = '1 2 3 4 5 6 7 8 9';
//echo $str.PHP_EOL;
$result = explode(' ', $str);
//print_r($result);
$len = count($result);
$halfLen = ceil($len/2);
$count = $halfLen;
$i = 0;
$j = 0;
while ($count != $j) {
    $c = $result[$len-1];
    $result[$len - 1] = $result[$i];
    $result[$i] = $c;
    $i++;
    $len--;
    $j++;
}
//print_r($result);
echo $result = implode(',', $result);*/



