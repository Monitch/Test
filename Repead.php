<?php
session_start();
header("Content-Type: text/plain; charset=utf-8");


if (!isset($_SESSION['time'])&& !isset($_SESSION['$age'])) {
    require_once("htmltest.html");
    $_SESSION['$name'] = $_POST['name'];
    $_SESSION['$age'] = $_POST['age'];
    echo $_SESSION['$name'] . " " . $_SESSION['$age'];
} else {
    echo $_SESSION['$name']." ".$_SESSION['$age'];
}

echo PHP_EOL;

$name = "Vitaliy";
$superName = "Monich";
$array = [];
$array = addValue($array, $name, $superName);
print_r($array);

function addValue(array $arr,$name,$superName)
{
    $arr[] = $name;
    $arr[] = $superName;
    return $arr;
}

$emailProvider="GMAIL";   // GMAIL, MAILRU, YANDEX
getEmail($emailProvider);

function getEmail($email)
{
    switch ($email) {
        case "GMAIL":
            sendGmail();
            break;
        case "MAILRU":
            sendMailRu();
            break;
        case "YANDEX":
            sendYandex();
            break;
    }
}

function sendGmail()
{
    echo "It's Gmail";
}

function sendMailRu()
{
    echo "It's MailRu";
}

function sendYandex()
{
    echo "It's Yandex";
}
