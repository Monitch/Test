<form action="" method="post">
    <p>Name: <input type="text" name="name" /></p>
    <p>Age: <input type="text" name="age" /></p>
    <p><input type="submit" /></p>
</form>
<?php
session_start();
$name = "Vitaliy";
$superName = "Monich";
$array = [];
$array = addValue($array, $name, $superName);
print_r($array);

function addValue(array $arr,$name,$superName){

    $arr[] = $name;
    $arr[] = $superName;
    return $arr;
}

$emailProvider="GMAIL";   // GMAIL, MAILRU, YANDEX
getEmail($emailProvider);

function getEmail($email){
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

function sendGmail(){
    echo "It's Gmail";
}

function sendMailRu(){
    echo "It's MailRu";
}

function sendYandex(){
    echo "It's Yandex";
}

if (empty($_SESSION['$name'])&& empty($_SESSION['$age'])){
echo " New session";
$_SESSION['$name'] = $_POST['name'];
$_SESSION['$age'] = $_POST['age'];}
else
echo $_SESSION['$name']." ".$_SESSION['$age'];
?>




