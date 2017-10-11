<?php

function task1($arrStr, $bool = false)
{
    foreach ($arrStr as $words) {
        if (!$bool) {
            echo "<p>" . $words . "</p>" . "<br>";
        } else {
            return $arrStr = implode(', ', $arrStr);
        }
    }
};
function task2($arrOfNumbers, $sign)
{
    $sum = $arrOfNumbers[0];
    if ($sign == '+') {
        for ($number = 1; $number < count($arrOfNumbers); $number++) {
            $sum += $arrOfNumbers[$number];
        }
    } elseif ($sign == '-') {
        for ($number = 1; $number < count($arrOfNumbers); $number++) {
            $sum -= $arrOfNumbers[$number];
        }
    } elseif ($sign == '*') {
        for ($number = 1; $number < count($arrOfNumbers); $number++) {
            $sum *= $arrOfNumbers[$number];
        }
    } elseif ($sign == '/') {
        for ($number = 1; $number < count($arrOfNumbers); $number++) {
            $sum /= $arrOfNumbers[$number];
        }
    } else {
        return "Error";
    }
    return $sum;
};
