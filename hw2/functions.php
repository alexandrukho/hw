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
function task3($sign, ...$args)
{
    $argList = func_get_args();
    $numArgs = func_num_args();
    $sum = $argList[1];
    if ($sign == '+') {
        for ($i = 2; $i < $numArgs; $i++) {
            $sum += $argList[$i];
        }
    } elseif ($sign == '-') {
        for ($i = 2; $i < $numArgs; $i++) {
            $sum -= $argList[$i];
        }
    } elseif ($sign == '*') {
        for ($i = 2; $i < $numArgs; $i++) {
            $sum *= $argList[$i];
        }
    } elseif ($sign == '/') {
        for ($i = 2; $i < $numArgs; $i++) {
            $sum /= $argList[$i];
        }
    }
    return $sum;
};
function task4(int $numRows, int $numCols)
{
    echo "<table>";
    echo "<tbody>";
    for ($rows = 1; $rows <= $numRows; $rows++) {
        echo "<tr style='text-align: center;'>";
        for ($cols = 1; $cols <= $numCols; $cols++) {
            if ($rows % 2 == 0 && $cols % 2 == 0) {
                echo "<td>" . $rows * $cols . "</td>";
            } elseif ($rows % 2 == 1 && $cols % 2 == 1) {
                echo "<td>" . $rows * $cols . "</td>";
            } else {
                echo "<td>" . $rows * $cols . "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
};
