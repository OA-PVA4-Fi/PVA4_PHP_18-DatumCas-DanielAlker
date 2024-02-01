<?php
echo date('Y-m-d') . "<br>";
echo date('Y-m-d') . "<br>";
echo date('G:i:s') . "<br>";
echo date('Y-m-d, G:i:s') . "<br>";
echo date('m. d. Y h:i A  ') . "<br>";

$currentDate = date('Y-m-d');
echo "Aktuální datum: $currentDate <br>";

$tomorrowDate = date('Y-m-d', strtotime('+1 day'));
echo "Zítřejší datum: $tomorrowDate <br>";

$firstDayOfMonth = date('Y-m-01', strtotime('first day of next month'));
echo "První den následujícího měsíce: $firstDayOfMonth <br>";

$lastDayOfNextMonth = date('Y-m-t', strtotime('last day of next month'));
echo "Poslední den následujícího měsíce: $lastDayOfNextMonth <br>";

$yesterdayDate = date('Y-m-d', strtotime('-1 day'));
echo "Včerejší datum: $yesterdayDate <br>";

$dueDate = date('Y-m-d', strtotime('+14 days'));
echo "Datum splatnosti 14 dní od data vystavení: $dueDate <br>";

$taxableDate = date('Y-m-d', strtotime('-3 days'));
echo "Datum zdanitelného plnění před třemi dny: $taxableDate <br>";

?>

