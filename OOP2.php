<?php
header("Content-Type: text/plain; charset=utf-8");

trait Animals
{
    public function walk()
    {
        var_dump("Walk");
    }

    public function run()
    {
        var_dump("Run");
    }

    public function sound()
    {
        var_dump("Make Sound");
    }
}
class Cat
{
    use Animals;
}
class Dog
{
    use Animals;
}
class Elephant
{
    use Animals;

    public function trunkSound()
    {
        var_dump("Sound from trunk");
    }
}

$Cat = new Cat();
$Dog = new Dog();
$Elephant = new Elephant();

$Cat->walk();
$Cat->run();
$Cat->sound();
echo PHP_EOL;

$Dog->walk();
$Dog->run();
$Dog->sound();
echo PHP_EOL;

$Elephant->walk();
$Elephant->run();
$Elephant->sound();
$Elephant->trunkSound();
