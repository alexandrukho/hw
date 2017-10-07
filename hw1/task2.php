<?php
$schoolDesc = 80;
$markers = 23;
$pencils = 40;
$paint = $schoolDesc - $markers - $pencils;
echo("У нас есть $schoolDesc рисунков. " . " Из них $markers выполнены фломастерами, " . "$pencils карандашами," . " a остальные красками. Сколько рисунков, выполненные красками ?" . "<br>");
echo("$schoolDesc" . " - " . "$markers" . " - " . "$pencils" . " = " . "$paint");