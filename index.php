<?php
$name="Vitaliy";
$a = ["Привет", "Мир!", "Меня", "зовут", $name];
echo($a[0]." ".$a[1]." ".$a[2]." ".$a[3]." ".$a[4]." | ");


$arr = [
    "dep1" => ["Kolya" => 1000, "Oleg" => 700, "Olya" => 1100],
    "dep2" => ["Nik" => 900, "Jhon" => 800, "Boss" => 1600],
];

echo('Dep1 Salary: '.array_sum($arr["dep1"])." | ");
echo('Dep2 Salary: '.array_sum($arr["dep2"])." | ");

$array = [1, 2, 3, 4, 5, 6];
$r1=array_slice($array, 3);
print_r($r1);
echo " | ";
print_r(array_splice($r1, 0, 1));
print_r(array_splice($r1, -1));
echo " | ";
print_r($r1);