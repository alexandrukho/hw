<?php
require 'functions.php';

$strTask1 = ["string1", "string2", "string3"];
$numbers = [5, 2];

echo task1($strTask1);
echo task2($numbers, '+');
echo "<br>";
echo task3('*', 5, 2.5);
echo "<br>";
echo task4(10, 10);
echo task5(task5_1('Анна'));
echo "<br>";
echo task7('Карл у Клары украл Кораллы');
echo "<br>";
echo task8("RX packets:9132 errors:0 dropped:0 :) overruns:0 frame:0. ");
