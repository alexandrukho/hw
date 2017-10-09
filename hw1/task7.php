<?php


echo "<table>";
echo "<tbody>";
for ($rows = 1; $rows <= 10; $rows++) {
    echo "<tr style='text-align: center;'>";
    for ($cols = 1; $cols <= 10; $cols++) {
        if ($rows % 2 == 0 && $cols % 2 == 0) {
            echo "<td>" . "(" . $rows * $cols . ")" . "</td>";
        } elseif ($rows % 2 == 1 && $cols % 2 == 1) {
            echo "<td>" . "[" . $rows * $cols . "]" . "</td>";
        } else {
            echo "<td>" . $rows * $cols . "</td>";
        }
    }
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
