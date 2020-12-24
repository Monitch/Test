<?php
class Cat{
    private int $age;
    private string $color;
    private string $breed;
    private string $boyOrGirl;
    private int $size;

    public function __construct(
        int $age,
        string $color,
        string $breed,
        string $boyOrGirl,
        int $size
    ){
        $this->age =$age;
        $this->color=$color;
        $this->breed=$breed;
        $this->boyOrGirl=$boyOrGirl;
        $this->size=$size;

    }

    public function isBoy(): bool
    {
        return $this->boyOrGirl == "Man";
    }
    public function isGirl(): bool
    {
        return $this->boyOrGirl == "Women";
    }

    public function isPerfrectCat(): bool
    {
        return (
            $this->isPerfrectAge() &&
            $this->isPerfrectBreed() &&
            $this->isPerfrectSize() &&
            $this->isPerfrectColor()
        );
    }

    private function isPerfrectAge(): bool
    {
        return $this->age < 7 && $this->age > 2;
    }

    private function isPerfrectColor(): bool
    {
        return $this->color == "Grey";
    }

    private function isPerfrectBreed(): bool
    {
        return $this->breed == "Street";
    }

    private function isPerfrectSize(): bool
    {
        return $this->size == 6;
    }
}

 $Poenix=new Cat(3,"Grey","Street","Man",6);
 var_dump($Poenix->isBoy());
 var_dump($Poenix->isPerfrectCat());