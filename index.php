<?php
require_once 'NewYears.php';

$userUkrsib = new Ukrsib();
$userPrivate = new Privat();
$client = new Client();
$client->payForOrder($userUkrsib);
$client->payForOrder($userPrivate);