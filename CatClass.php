<?php
class Cat{
    private int $Age;
    private string $Color;
    private string $Breed;
    private string $Sex;
    private int $Size;

    public function __construct(
        int $Age,
        string $Color,
        string $Breed,
        string $Sex,
        int $Size
    ){
        $this->Age =$Age;
        $this->Color=$Color;
        $this->Breed=$Breed;
        $this->Sex=$Sex;
        $this->Size=$Size;

    }


    public function isBoy(): bool
    {
        return $this->Sex=="Man";
    }
    public function isGirl(): bool
    {
        return $this->Sex=="Women";
    }
    public function isPerfrectCat() :bool{
        return (
            $this->isPerfrectAge() &&
            $this->isPerfrectBreed() &&
            $this->isPerfrectSize() &&
            $this->isPerfrectColor()
        );

    }
    private function isPerfrectAge() :bool{
        return $this->Age < 7 && $this->Age > 2;
    }
    private function isPerfrectColor() :bool{
        return $this->Color == "Grey";
    }
    private function isPerfrectBreed() :bool{
        return $this->Breed == "Street";
    }
    private function isPerfrectSize() :bool{
        return $this->Size == 6;
    }

}
 $Poenix=new Cat(3,"Grey","Street","Man",6);
 var_dump($Poenix->isBoy());
 var_dump($Poenix->isPerfrectCat());
