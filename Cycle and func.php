<?php
header("Content-Type: text/plain; charset=utf-8");
//1
$arr = [
    "dep1" => [10,20,20],
    "dep2" => [30,40,30],
];
$sum = 0;

    for ($i = 0; $i < count($arr["dep1"]); $i++)
    {
        $sum+= $arr["dep1"][$i] + $arr["dep2"][$i];
    }
    echo "1: ",$sum.PHP_EOL;
//2
echo "2: ";
    for ($i = 0; $i < 100; $i++) {
        echo $i . " ";
        if ($i == 50)
            break;
    }
    echo PHP_EOL;
//3
$array = [1, 2, 3, 4, 5, 6];
    function getSum(array $arr,$n){
        $sum = 0;
        for ($i = 0; $i < $n; $i++) {
            $sum += $arr[$i];
        }
        return $sum;
    }
    echo "3: ".getSum($array,count($array)).PHP_EOL;
//4

$arr = [
    "dep1" => [10,20,20],
    "dep2" => [30,40,30],
];
    function getDepSum(array $array){
        $sum = 0;
        $sum += getSum($array["dep1"],count($array["dep1"]));
        $sum += getSum($array["dep2"],count($array["dep2"]));
       return $sum;
    }
    echo "4: ".getDepSum($arr);
