<?php
$name="Vitaliy";
$a = array ("Привет", "Мир!", "Меня", "зовут", $name);
print_r($a);

$arr = [
    "dep1" => array("Kolya" => 1000, "Oleg" => 700, "Olya" => 1100),
    "dep2" => array("Nik" => 900, "Jhon" => 800, "Boss" => 1600),
];

echo('Dep1 Salary: '.array_sum($arr["dep1"]));
echo('Dep2 Salary: '.array_sum($arr["dep2"]));

$array = array(1, 2, 3, 4, 5, 6);
print_r(array_slice($array, 3));
print_r(array_splice($array, 0, 1));
print_r(array_splice($array, -1));
print_r($array);